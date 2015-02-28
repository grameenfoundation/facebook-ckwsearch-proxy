

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
   
    //select a0r70000000Sw1uA    MIS Service Providers
        $MISServiceProvidersquery=("select * from menu_Item where parent_id='a0r70000000Sw1uA' order by label asc");
        $MISServiceProvidersResult = mysqli_query($connection,$MISServiceProvidersquery)                
                or die('Invalid query for selecting bananas ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($MISServiceProvidersObj = $MISServiceProvidersResult->fetch_object()) {
        $MISServiceProvidersIDS=$MISServiceProvidersObj->id;
        $MISServiceProvidersLabels=$MISServiceProvidersObj->label;
        $MISServiceProvidersContent=$MISServiceProvidersObj->content;
         
        printf ("%s \n", $MISServiceProvidersIDS);
        
        $path='MISServiceProviders';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$MISServiceProvidersLabels</a></li>";
        echo ''."$MISServiceProvidersContent". "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>



