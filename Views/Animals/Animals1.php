

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
   
    //select a0r70000000StG2A Fish farming
        $Fishfarmingquery=("select * from menu_Item where parent_id='a0r70000000StG2A' order by label asc");
        $FishfarmingResult = mysqli_query($connection,$Fishfarmingquery)                
                or die('Invalid query for selecting Heat detection in Cattle: ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($FishfarmingObj = $FishfarmingResult->fetch_object()) {
        $FishfarmingIDS=$FishfarmingObj->id;
        $FishfarmingLabels=$FishfarmingObj->label;
        $FishfarmingContent=$FishfarmingObj->content;
         
        printf ("%s \n", $FishfarmingIDS);
        
        $path='Fishfarming';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$FishfarmingLabels</a></li>";
        echo ''."$FishfarmingContent". "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>



