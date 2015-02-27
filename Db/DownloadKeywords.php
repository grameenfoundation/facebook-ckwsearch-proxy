
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

class foo{}
$boo=new foo();


//get Contents from salesforce
$gr_url = "http://grameenfoundation.force.com/ckwsearch/SearchGetRequest?data=%7B%0A%22imei%22%3A%20%22355435053574074%22%2C%20%22keywordsVersion%22%3A%222014-01-01%2000%3A00%3A00%22%2C%0A%22ImagesLastUpdatedDate%22%3A%222014-01-01%2000%3A00%3A00%22%0A%7D%0A&method=keywords";
$response = file_get_contents($gr_url);

//decode json string
$boo =  json_decode($response);

echo "</br>";

 $version = $boo->{'version'};
 $total = $boo->{'total'};
 $resultMessage = $boo->{'resultMessage'};
 $resultCode = $boo->{'resultCode'};
 
 /*
  "deletedMenuItems" : null,
  "deletedImages" : null */
 
 //get menus
 $menus=array();
 $menus=$boo->{'menus'};
 
 
 //getmenuItems
 $menuItems=array();
 $menuItems=$boo->{'menuItems'};
 
 //getImages
 $menuImages=array();
 $menuImages=$boo->{'images'};
 
  //echo $total. "</br>";

  if($resultCode=='0'){
    echo $resultMessage. "</br>"; 
    
   //loop thru menus 
   $value=array(); 
    foreach ($menus as $value) {
    
    $menuId= $value->{'id'};
    $menuLabel= $value->{'label'};
   
    
    $query3=("insert IGNORE into menu (id,label)values('$menuId','$menuLabel')");
      
    $result3 = mysqli_query($connection,$query3);
    
    if ($result3) {
       echo "New Menu record created successfully";
        
    }  else {
        die('Invalid query for insertion of menus: ' . mysqli_error($connection));    
    }
    echo ''. "</br>";
    //loop thru menu Items
    foreach ($menuItems as $value) {
        $menuItemId= $value->{'id'};
        $menuItemLabel= $value->{'label'};
        $position= $value->{'position'};
        $parentid= $value->{'parent_id'};
        $menuid= $value->{'menu_id'};
        $content= $value->{'content'};
        
        //Escape special characters for sql \n, \r, \, ', ", and Control-Z.
        $menuItemId = mysqli_real_escape_string($connection,$menuItemId);
        $menuItemLabel = mysqli_real_escape_string($connection,$menuItemLabel);
        $position = mysqli_real_escape_string($connection,$position);
        $parentid = mysqli_real_escape_string($connection,$parentid);
        $menuid = mysqli_real_escape_string($connection,$menuid);
        $content = mysqli_real_escape_string($connection,$content);
        
        $query4=("insert IGNORE into menu_item (id,label,menu_id,parent_id,position,content)values('$menuItemId','$menuItemLabel','$menuid','$parentid','$position','$content')");
        $result4 = mysqli_query($connection,$query4);
    
    if ($result4) {
       echo "New  Menu Item record created successfully";
        
    }  else {
        die('Invalid query for insertion of menu Items: ' . mysqli_error($connection));    
    }
        
    }
       
}
    
  }  else {
    echo 'Not Found'. "</br>";
    echo $resultMessage. "</br>"; 
}
  
  
   mysqli_close($connection);



?>