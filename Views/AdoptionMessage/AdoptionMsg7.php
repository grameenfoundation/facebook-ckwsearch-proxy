<!--
/*
 * Copyright (c) 2015 AppLab, Grameen Foundation
 *
 *  Facebook MVP 
 *  
 *  
 **/
-->
<?php include '../../base.php';
include '../../Db/connection.php';


if($connection){
   
    //select  Water Harvesting Messages of menu Item where parent parent_id='a0r70000000TGj6A'
        $WaterHarvestingquery=("select * from menu_Item where parent_id='a0r70000000TGjGA' order by label asc");
        $WaterHarvestingResult = mysqli_query($connection,$WaterHarvestingquery)                
                or die('Invalid query for selecting Water Harvesting: ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($WaterHarvestingObj = $WaterHarvestingResult->fetch_object()) {
        $WaterHarvestingIDS=$WaterHarvestingObj->id;
        $WaterHarvestingLabels=$WaterHarvestingObj->label;
        $WaterHarvestingContent=$WaterHarvestingObj->content;
         
        printf ("%s \n", $WaterHarvestingIDS);
        
        $path='/AdoptionMessage/WaterHarvesting';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$WaterHarvestingLabels</a></li>";
        echo ''."$WaterHarvestingContent". "</ul> "; 
            
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


