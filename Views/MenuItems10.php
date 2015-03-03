<!--
/*
 * Copyright (c) 2015 AppLab, Grameen Foundation
 *
 *  Facebook MVP 
 *  
 *  
 **/
-->
<?php include '../base.php';
include '../Db/connection.php';


if($connection){
   
    //select  a0r70000000T8eLA-Water Harvesting ,   
        $waterHarvestingquery=("select * from menu_Item where parent_id='a0r70000000T8eLA' order by label asc");
        $waterHarvestingResult = mysqli_query($connection,$waterHarvestingquery)                
                or die('Invalid query for selecting Water Harvesting' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($waterHarvestingObj = $waterHarvestingResult->fetch_object()) {
        $waterHarvestingIDS=$waterHarvestingObj->id;
        $waterHarvestingLabels=$waterHarvestingObj->label;
        $waterHarvestingContent=$waterHarvestingObj->content;
         
        
        if (strpos($waterHarvestingContent,'No Content') !== false) {
            $waterHarvestingContent='';
        }
        // printf ("%s \n", $waterHarvestingIDS);
        
        $path='WaterHarvesting/waterHarvesting';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$waterHarvestingLabels</a></li>";
        echo ''."$waterHarvestingContent". "</ul> "; 
            
    }
       
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}

?>


