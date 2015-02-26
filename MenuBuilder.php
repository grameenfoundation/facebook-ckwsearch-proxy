<?php

include 'base.php';
include 'Db/connection.php';





if ($connection) {
  
$getMenus=("select * from menu where label='CKW Search'");
$resultMenus = mysqli_query($connection,$getMenus);
    
//getMenuIds
    if ($resultMenus) {
       echo " Record selected successfully";
       echo ''. "</br>";
        /* fetch object array */
    while ($menuObj = $resultMenus->fetch_object()) {
        $menuID=$menuObj->id;
        printf ("%s and %s\n", $menuID, $menuObj->label);
           
    }
       
        
    }  else {
        die('Invalid query for selecting menus: ' . mysqli_error($connection));    
    }
    echo ''. "</br>";
    
    $getMenuItems=("select * from menu_Item where menu_id='$menuID' and parent_id=''");
    $resultMenuItems = mysqli_query($connection,$getMenuItems);
 //getMenuItemlabels whose parent ID is top
    
    if ($resultMenuItems) {
       echo " Record selected successfully";
       echo ''. "</br>";
        /* fetch object array */
    while ($menuItemObj = $resultMenuItems->fetch_object()) {
        $menuItemIDS=$menuItemObj->id;
        $menuItemLabels=$menuItemObj->label;
        
       // printf(" %s-%s , ",$menuItemIDS,$menuItemLabels);
       
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href='Views/MenuItems.php'>$menuItemLabels</a></li>";
        echo ''. "</ul> "; 
        
        
/*        
        //select label of menu Item where parent Id and id=$menuItemIDS
        $getMenuItemLabel=("select label from menu_Item where menu_id='$menuID'");
        $resultMenuItemLabel = mysqli_query($connection,$getMenuItemLabel)
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
        $menuItemIDSArray=array();
        $menuItemIDSArray = $menuItemIDS;
        printf(" %s \n",$menuItemIDS);
        printf ("%s and %s\n", $menuItemObj->id, $menuItemObj->label);    */   
    }
    
   // printf(" %s ",$menuItemIDSArray);
    
       
        
    }  else {
        die('Invalid query for selecting menuItems: ' . mysqli_error($connection));    
    }
    echo ''. "</br>";
    
    
    
    
    
}  else {
    echo 'No connection to Db'; 
}


mysqli_close($connection);

?>