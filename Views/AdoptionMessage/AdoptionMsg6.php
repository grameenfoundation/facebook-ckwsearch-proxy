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
include '../../base.php';
include '../../Db/connection.php';


if($connection){
   
    //select Post-harvesting.Handling of grains (Maize,Sorghum,Millet) of menu Item where parent Id and id=$menuItemIDS
        $postharvestingquery=("select * from menu_Item where parent_id='a0r70000000TGjBA' order by label asc");
        $postharvestingResult = mysqli_query($connection,$postharvestingquery)                
                or die('Invalid query for selecting Post-harvesting.Handling of grains (Maize,Sorghum,Millet): ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($postharvestingObj = $postharvestingResult->fetch_object()) {
        $postharvestingIDS=$postharvestingObj->id;
        $postharvestingLabels=$postharvestingObj->label;
        $postharvestingContent=$postharvestingObj->content;
         
        printf ("%s \n", $postharvestingIDS);
        
        $path='/AdoptionMessage/postHarvesting';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$postharvestingLabels</a></li>";
        echo ''."$postharvestingContent". "</ul> "; 
            
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


