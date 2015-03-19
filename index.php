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



if($connection){
    if( $_GET["id"]){
        $txx = $_GET["id"];
        
    } else {
        $txx = "";
        
    }
    
  
    //select  Menu Item where id =$var
        $subMenuquery=("select * from menu_Item where parent_id='$txx' order by label asc");
        $subMenuResult = mysqli_query($connection,$subMenuquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
      
        echo ''. "</br>";
           
    while ($subMenuObj = $subMenuResult->fetch_object()) {
        $subMenuIDS=$subMenuObj->id;
        $subMenuLabels=$subMenuObj->label;
        $subMenuContent=$subMenuObj->content;
         
         $_GET["subMenuLabels"]=$subMenuLabels;
         $_GET["id"]=$subMenuIDS;
         $txx=$_GET["id"];
        
         $_POST["show"]=0;
         $show=$_GET["show"];
        if (strpos($subMenuContent,'No Content') !== false) {
            $subMenuContent='';
        }
        
        $_GET["subMenuContent"]=$subMenuContent;
        
        $file="SubMenu.php?id=";
        
        if ($txx != "" ){
            echo ""."<ul id='menu'>";
            echo ""."<li ><a href='index.php?id=".$txx."&show=1' title='Next Page' class='NameAgain' >".$_GET["subMenuLabels"]."</a></li>";
            echo "". $_GET['subMenuContent']."</ul> ";        
        }
        
        }  
        
    }  else {
        die('Error connecting to Db'.mysqli_error($connection));
        
    }
        
        
        ?>


