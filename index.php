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
if($connection) {
    
    //getMenuIds
    $getMenus=("select * from menu where label='CKW Search'");
    $resultMenus = mysqli_query($connection,$getMenus);
    
    if ($resultMenus) {
        
        if( isset($_GET["id"]) ) {
        $id = $_GET["id"];
    } else {
        $id = "";
    }
    //select all last level IDS
    $query=("select id from menu_item where parent_id=id");
        $result = mysqli_query($connection,$query)                
            or die('Invalid query for selecting parentId: ' . mysqli_error($connection));
        $arr=array();
        //array_push($arr, 'a0r70000000TGp4A');
        //array_push($arr, 'a0r70000000TGpJA');
        while ($resultObj=$result->fetch_object()){
        
        array_push($arr, $resultObj->id);
                
    }
    
    //select  Menu Item where id $_GET["id"]
    $subMenuquery=("select * from menu_item where parent_id='$id' order by position asc, label asc");
    $subMenuResult = mysqli_query($connection,$subMenuquery)                
            or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
  
    echo ''. "</br>";
           
    while ($subMenuObj = $subMenuResult->fetch_object()) {
        $subMenuContent = $subMenuObj->content;
        
        
        if (strpos($subMenuContent,'No Content') !== false) {
            $subMenuContent='';
        }
   
    if (in_array($subMenuObj->id, $arr)) {
            echo ""."<ul id='menu'>";
            echo ""."<li><b>".$subMenuObj->label."</b></li>";
            echo "". $subMenuContent ."</ul> ";  
    
    }else {
            
            echo ""."<ul id='menu'>";
            echo ""."<li ><a href='index.php?id=".$subMenuObj->id."' title='Next Page' class='SubMenu' >".$subMenuObj->label."</a></li>";
            echo "". $subMenuContent ."</ul> "; 
        
        }     
        
    }  
    print_r(array_values($arr));
        
    }else {
        die('Invalid query for selecting menus: ' . mysqli_error($connection));    
    }
                    
}else {
    die('Error connecting to Db'.mysqli_error($connection));
}