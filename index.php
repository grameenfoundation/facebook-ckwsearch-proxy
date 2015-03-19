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

if($connection) {
    if( $_GET["id"]) {
        $id = $_GET["id"];
    } else {
        $id = "";
    }
    
    //select  Menu Item where id = $var
    $subMenuquery=("select * from menu_Item where parent_id='$id' order by label asc");
    $subMenuResult = mysqli_query($connection,$subMenuquery)                
            or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
  
    echo ''. "</br>";
           
    while ($subMenuObj = $subMenuResult->fetch_object()) {
        $subMenuContent = $subMenuObj->content;
        
        if (strpos($subMenuContent,'No Content') !== false) {
            $subMenuContent='';
        }
        
        echo ""."<ul id='menu'>";
        echo ""."<li ><a href='index.php?id=".$subMenuObj->id."' title='Next Page' class='NameAgain' >".$subMenuObj->label."</a></li>";
        echo "". $subMenuContent ."</ul> ";
    }  
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}
