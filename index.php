<!--
/*
 * Copyright (c) 2015 AppLab, Grameen Foundation
 *
 *  Facebook MVP 
 *  
 *  
 **/
-->

<html>
    <head>
        <meta name="viewport" content="width=device-width" />
        <link href="Css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div>
            <div>
                <img class="logo" typeof="foaf:Image" src="images/image2.png" > 
            </div>
        </div>
    </body>

    <html/>


    <?php
    include 'Models/connection.php';
    include 'Models/Config.php';

    if ($connection) {

        if (isset($_GET["id"])) {
            $id = $_GET["id"];
        } else {
            $id = "";
        }
        //select  Menu Item where id $_GET["id"]
        $subMenuQuery = ("select * from menu_item where parent_id='$id' order by position asc, label asc");
        $subMenuResult = mysqli_query($connection, $subMenuQuery)
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
        echo '' . "</br>";
        while ($subMenuObj = $subMenuResult->fetch_object()) {
            $subMenuContent = $subMenuObj->content;
            if (strpos($subMenuContent, 'No Content') !== false) {
                $subMenuContent = '';
            }
            //check if Id not hidden in arraylist
            if (!in_array($subMenuObj->id, $hiddenIDarray)) {

                //select all last level IDS in the tree for CKW Search
                $subId = $subMenuObj->id;
                $query = ("select count(id) as no from menu_item where parent_id='$subId'");
                $result = mysqli_query($connection, $query)
                        or die('Invalid query for selecting parentId: ' . mysqli_error($connection));
                $countObj = $result->fetch_object();
                $count = $countObj->no;
               
                //check if id count is for last level tree
                if ($count == '0') {
                    echo "" . "<ul id='menu'>";
                    echo "" . "<li><b>" . $subMenuObj->label . "</b></li>";
                    echo "" . $subMenuContent . "</ul> ";
                } else {
                    echo "" . "<ul id='menu'>";
                    echo "" . "<li ><a href='index.php?id=" . $subMenuObj->id . "' title='Next Page' class='SubMenu' >" . $subMenuObj->label . "</a></li>";
                    $subContent = explode('Attribution:', $subMenuContent);
                    echo "" . substr($subContent[0], 0, 100) . "</ul> ";
                }
            }
        }
        echo '' . "</br>";
        echo '' . "Copyright (c) 2015 Grameen Foundation</br>";
        
    } else {

        die('Error connecting to Db' . mysqli_error($connection));
    }
