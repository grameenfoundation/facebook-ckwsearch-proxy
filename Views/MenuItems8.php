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
   
    //select  a0r70000000Su3xA-Service Providers ,   
        $serviceProvidersquery=("select * from menu_Item where parent_id='a0r70000000Su3xA' order by label asc");
        $serviceProvidersResult = mysqli_query($connection,$serviceProvidersquery)                
                or die('Invalid query for selecting Market Information ,: ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($serviceProvidersObj = $serviceProvidersResult->fetch_object()) {
        $serviceProvidersIDS=$serviceProvidersObj->id;
        $serviceProvidersLabels=$serviceProvidersObj->label;
        $serviceProvidersContent=$serviceProvidersObj->content;
         
         printf ("%s \n", $serviceProvidersIDS);
        
        $path='ServiceProviders/serviceProviders';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$serviceProvidersLabels</a></li>";
        echo ''."$serviceProvidersContent". "</ul> "; 
            
    }
       
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}

?>


