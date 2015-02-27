

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
   
    //select a0r70000000UziiA Business model for fish farming 
        $FishfarmingBMquery=("select * from menu_Item where parent_id='a0r70000000UziiA' order by label asc");
        $FishfarmingBMResult = mysqli_query($connection,$FishfarmingBMquery)                
                or die('Invalid query for selecting Business model for fish farming: ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($FishfarmingBMObj = $FishfarmingBMResult->fetch_object()) {
        $FishfarmingBMIDS=$FishfarmingBMObj->id;
        $FishfarmingBMLabels=$FishfarmingBMObj->label;
        $FishfarmingBMContent=$FishfarmingBMObj->content;
         
        printf ("%s \n", $FishfarmingBMIDS);
        
        $path='/Animals/FishfarmingBM';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$FishfarmingBMLabels</a></li>";
        echo ''."$FishfarmingBMContent". "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>



