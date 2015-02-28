

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
   
    //select a0r70000000TQKLA    Kabale District  
        $kabaleDistrictquery=("select * from menu_Item where parent_id='a0r70000000TQKLA' order by label asc");
        $kabaleDistrictResult = mysqli_query($connection,$kabaleDistrictquery)                
                or die('Invalid query for selecting Kabale District ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($kabaleDistrictObj = $kabaleDistrictResult->fetch_object()) {
        $kabaleDistrictIDS=$kabaleDistrictObj->id;
        $kabaleDistrictLabels=$kabaleDistrictObj->label;
        $kabaleDistrictContent=$kabaleDistrictObj->content;
         
        printf ("%s \n", $kabaleDistrictIDS);
        
        $path='KabaleDistrict';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$kabaleDistrictLabels</a></li>";
        echo ''."$kabaleDistrictContent". "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>



