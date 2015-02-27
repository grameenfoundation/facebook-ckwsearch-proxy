a0r70000000USztA Harvesting your fish
    


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
   
    //select a0r70000000USztA Harvesting your fish
        $HarvestingFishquery=("select * from menu_Item where parent_id='a0r70000000USztA' order by label asc");
        $HarvestingFishResult = mysqli_query($connection,$HarvestingFishquery)                
                or die('Invalid query for selecting HarvestingFish: ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($HarvestingFishObj = $HarvestingFishResult->fetch_object()) {
        $HarvestingFishIDS=$HarvestingFishObj->id;
        $HarvestingFishLabels=$HarvestingFishObj->label;
        $HarvestingFishContent=$HarvestingFishObj->content;
         
        printf ("%s \n", $HarvestingFishIDS);
        
        $path='HarvestingFish';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$HarvestingFishLabels</a></li>";
        echo ''."$HarvestingFishContent". "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>



