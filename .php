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

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$var' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$var' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$var' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$var' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$var' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$var' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$var' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$var' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$var' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$var' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$var' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$var' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$var' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$var' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$var' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$var' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$var' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$var' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$var' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$var' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$var' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$var' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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
include 'MenuBuilder.php';

$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$ID' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$ID' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$ID' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$ID' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$ID' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$ID' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$ID' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$ID' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$ID' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$ID' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$ID' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$ID' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$ID' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$ID' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$ID' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$ID' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$ID' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$ID' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$ID' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$ID' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$ID' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$ID' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$ID' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$ID' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$ID' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$ID' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$ID' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$ID' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='$ID' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='a0r70000000TGj6A' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='a0r70000000TGj6A' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='a0r70000000TGj6A' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='a0r70000000TGj6A' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='a0r70000000TGj6A' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='a0r70000000TGj6A' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='a0r70000000TGj6A' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='a0r70000000TGj6A' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='a0r70000000TGj6A' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='a0r70000000TGj6A' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='a0r70000000TGj6A' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='a0r70000000TGj6A' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='a0r70000000TGj6A' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


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


$ID='6578';

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='a0r70000000TGj6A' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
        
        
        
        if (strpos($adoptionContent,'No Content') !== false) {
            $adoptionContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$menuItemIDS.$ext;
        
        printf($fullLink);
        $file =  fopen($fullLink, "a+");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$menuItemLabels</a></li>";
        echo ''."$menuItemContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
       fwrite($file, $newPageContent);
       
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


