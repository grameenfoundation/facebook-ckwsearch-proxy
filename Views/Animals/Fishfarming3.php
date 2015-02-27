

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
   
    //select a0r70000000V1w1A  Fish farming as a business
        $FishFarmingBusinessquery=("select * from menu_Item where parent_id='a0r70000000V1w1A' order by label asc");
        $FishFarmingBusinessResult = mysqli_query($connection,$FishFarmingBusinessquery)                
                or die('Invalid query for selecting Fish farming as a business: ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($FishFarmingBusinessObj = $FishFarmingBusinessResult->fetch_object()) {
        $FishFarmingBusinessIDS=$FishFarmingBusinessObj->id;
        $FishFarmingBusinessLabels=$FishFarmingBusinessObj->label;
        $FishFarmingBusinessContent=$FishFarmingBusinessObj->content;
         
        printf ("%s \n", $FishFarmingBusinessIDS);
        
        $path='FishFarmingBusiness';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$FishFarmingBusinessLabels</a></li>";
        echo ''."$FishFarmingBusinessContent". "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>



