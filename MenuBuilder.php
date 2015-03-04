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

include 'base.php';
include 'Db/connection.php';


if ($connection) {
  
$getMenus=("select * from menu where label='CKW Search'");
$resultMenus = mysqli_query($connection,$getMenus);
    
//getMenuIds
    if ($resultMenus) {
      // echo " Record selected successfully";
      
        /* fetch object array */
    while ($menuObj = $resultMenus->fetch_object()) {
        $menuID=$menuObj->id;         
    }
              
    }  else {
        die('Invalid query for selecting menus: ' . mysqli_error($connection));    
    }
    echo ''. "</br>";
    
    $getMenuItems=("select * from menu_Item where menu_id='$menuID' and parent_id='' order by label asc");
    $resultMenuItems = mysqli_query($connection,$getMenuItems);
 //getMenuItemlabels whose parent ID is top
    
    if ($resultMenuItems) {
      // echo " Record selected successfully";
       
        /* fetch object array */
       $num=0;
    while ($menuItemObj = $resultMenuItems->fetch_object()) {
        $menuItemIDS=$menuItemObj->id;
        $menuItemLabels=$menuItemObj->label;
        $menuItemContent=$menuItemObj->content;
       
       
          //   $var = $menuItemIDS;
        
     
        if (strpos($menuItemContent,'No Content') !== false) {
            $menuItemContent='';
        }
        
        //printf(" %s-%s , ",$menuItemIDS,$menuItemLabels);
       
        $path='Views/';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$menuItemIDS.$ext;
        
        //printf($fullLink);
        $file =  fopen($fullLink, "c");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
        
        
       $more="<?php  \$var='$menuItemIDS'?>";
       
       fwrite($file, $more.$newPageContent);
       
       fclose($file);
           
    }
                 
    }  else {
        die('Invalid query for selecting menuItems: ' . mysqli_error($connection));    
    }   
    
}  else {
    echo 'No connection to Db'; 
}


mysqli_close($connection);

?>