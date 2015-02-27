

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
   
    //select a0r70000000TiJ4A Crops
        $Cropsquery=("select * from menu_Item where parent_id='a0r70000000TiJ4A' order by label asc");
        $CropsResult = mysqli_query($connection,$Cropsquery)                
                or die('Invalid query for selecting Animals ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($CropsObj = $CropsResult->fetch_object()) {
        $CropsIDS=$CropsObj->id;
        $CropsLabels=$CropsObj->label;
        $CropsContent=$CropsObj->content;
         
        printf ("%s \n", $CropsIDS);
        
        $path='Crops';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$CropsLabels</a></li>";
        echo ''."$CropsContent". "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>



