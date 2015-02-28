

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
   
    //select a0r70000000U82QA   District Veterinary Officers under Local Governments/MAAIF

    
        $DVOquery=("select * from menu_Item where parent_id='a0r70000000U82QA' order by label asc");
        $DVOResult = mysqli_query($connection,$DVOquery)                
                or die('Invalid query for selecting DVO ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($DVOObj = $DVOResult->fetch_object()) {
        $DVOIDS=$DVOObj->id;
        $DVOLabels=$DVOObj->label;
        $DVOContent=$DVOObj->content;
         
        printf ("%s \n", $DVOIDS);
        
        $path='DVO';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$DVOLabels</a></li>";
        echo ''."$DVOContent". "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>



