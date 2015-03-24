
<!--
/*
 * Copyright (c) 2015 AppLab, Grameen Foundation
 *
 *  Facebook MVP 
 *  
 *  
 **/
-->

<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'TableCreations.php';
include 'Config.php';

class Keywords {
    
}

$downloadKeywords = new Keywords();

//fetch Content from salesforce
//$gr_url = "http://grameenfoundation.force.com/ckwsearch/SearchGetRequest?data=%7B%0A%22imei%22%3A%20%22355435053574074%22%2C%20%22keywordsVersion%22%3A%222014-01-01%2000%3A00%3A00%22%2C%0A%22ImagesLastUpdatedDate%22%3A%222014-01-01%2000%3A00%3A00%22%0A%7D%0A&method=keywords";       
$response = file_get_contents($Url);

//decode json string
$downloadKeywords = json_decode($response);

echo "</br>";

$version = $downloadKeywords->{'version'};
$total = $downloadKeywords->{'total'};
$resultMessage = $downloadKeywords->{'resultMessage'};
$resultCode = $downloadKeywords->{'resultCode'};

//get menus
$menus = [];
$menus = $downloadKeywords->{'menus'};

//getmenuItems
$menuItems = [];
$menuItems = $downloadKeywords->{'menuItems'};

if ($resultCode == '0') {
    echo $resultMessage . "</br>";
//loop thru menus
    $value = array();
    foreach ($menus as $value) {
        $menuId = $value->{'id'};
        $menuLabel = $value->{'label'};

        $insertMenuQuery = ("insert IGNORE into menu (id,label)values('$menuId','$menuLabel')");

        $result3 = mysqli_query($connection, $insertMenuQuery);
        if ($result3) {
            echo "New Menu record created successfully";
        } else {
            die('Invalid query for insertion of menus: ' . mysqli_error($connection));
        }
        echo '' . "</br>";
        //loop thru menu Items
        foreach ($menuItems as $value) {

            //Escape special characters for sql \n, \r, \, ', ", and Control-Z.
            $menuItemId = mysqli_real_escape_string($connection, $value->{'id'});
            $menuItemLabel = mysqli_real_escape_string($connection, $value->{'label'});
            $position = mysqli_real_escape_string($connection, $value->{'position'});
            $parentid = mysqli_real_escape_string($connection, $value->{'parent_id'});
            $menuid = mysqli_real_escape_string($connection, $value->{'menu_id'});
            $content = mysqli_real_escape_string($connection, $value->{'content'});

            $query4 = ("insert IGNORE into menu_item (id,label,menu_id,parent_id,position,content)values('$menuItemId','$menuItemLabel','$menuid','$parentid','$position','$content')");
            $result4 = mysqli_query($connection, $query4);

            if ($result4) {
                echo "New  Menu Item record created successfully";
            } else {
                die('Invalid query for insertion of menu Items: ' . mysqli_error($connection));
            }
        }
    }
} else {
    echo 'Not Found' . "</br>";
    echo $resultMessage . "</br>";
}
mysqli_close($connection);

