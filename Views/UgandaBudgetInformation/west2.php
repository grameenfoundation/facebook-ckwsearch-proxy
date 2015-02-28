

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
   
    //select a0r70000000TQG5A    Kasese District
        $kaseseDistrictquery=("select * from menu_Item where parent_id='a0r70000000TQG5A' order by label asc");
        $kaseseDistrictResult = mysqli_query($connection,$kaseseDistrictquery)                
                or die('Invalid query for selecting Animals ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($kaseseDistrictObj = $kaseseDistrictResult->fetch_object()) {
        $kaseseDistrictIDS=$kaseseDistrictObj->id;
        $kaseseDistrictLabels=$kaseseDistrictObj->label;
        $kaseseDistrictContent=$kaseseDistrictObj->content;
         
        printf ("%s \n", $kaseseDistrictIDS);
        
        $path='KaseseDistrict';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$kaseseDistrictLabels</a></li>";
        echo ''."$kaseseDistrictContent". "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>



