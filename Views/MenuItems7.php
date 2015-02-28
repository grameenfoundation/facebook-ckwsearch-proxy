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
   
    //select  a0r70000000SuHlA-MobileMoney Directory , ,  
        $mobileMoneyDirectoryquery=("select * from menu_Item where parent_id='a0r70000000SuHlA' order by label asc");
        $mobileMoneyDirectoryResult = mysqli_query($connection,$mobileMoneyDirectoryquery)                
                or die('Invalid query for selecting Market Information ,: ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($mobileMoneyDirectoryObj = $mobileMoneyDirectoryResult->fetch_object()) {
        $mobileMoneyDirectoryIDS=$mobileMoneyDirectoryObj->id;
        $mobileMoneyDirectoryLabels=$mobileMoneyDirectoryObj->label;
        $mobileMoneyDirectoryContent=$mobileMoneyDirectoryObj->content;
         
         printf ("%s \n", $mobileMoneyDirectoryIDS);
        
        $path='MobileMoneyDirectory/mobileMoneyDirectory';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$mobileMoneyDirectoryLabels</a></li>";
        echo ''."$mobileMoneyDirectoryContent". "</ul> "; 
            
    }
       
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}

?>


