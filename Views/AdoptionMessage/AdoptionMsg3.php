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
   
    //select Heat detection in Cattle Messages of menu Item where parent parent_id='a0r70000000TGj6A'
        $heatDetectionCattlequery=("select * from menu_Item where parent_id='a0r70000000TGjWA' order by label asc");
        $heatDetectionCattleResult = mysqli_query($connection,$heatDetectionCattlequery)                
                or die('Invalid query for selecting Heat detection in Cattle: ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($heatDetectionCattleObj = $heatDetectionCattleResult->fetch_object()) {
        $heatDetectionCattleIDS=$heatDetectionCattleObj->id;
        $heatDetectionCattleLabels=$heatDetectionCattleObj->label;
        $heatDetectionCattleContent=$heatDetectionCattleObj->content;
         
        printf ("%s \n", $heatDetectionCattleIDS);
        
        $path='/AdoptionMessage/heatDetectionCattle';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$heatDetectionCattleLabels</a></li>";
        echo ''."$heatDetectionCattleContent". "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


