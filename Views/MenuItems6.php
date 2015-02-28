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
   
    //select  a0r70000000Um3yA-Market Information , ,  
        $marketInformationquery=("select * from menu_Item where parent_id='a0r70000000Um3yA' order by label asc");
        $marketInformationResult = mysqli_query($connection,$marketInformationquery)                
                or die('Invalid query for selecting Market Information ,: ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($marketInformationObj = $marketInformationResult->fetch_object()) {
        $marketInformationIDS=$marketInformationObj->id;
        $marketInformationLabels=$marketInformationObj->label;
        $marketInformationContent=$marketInformationObj->content;
         
         printf ("%s \n", $marketInformationIDS);
        
        $path='MarketInformation/marketInformation';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$marketInformationLabels</a></li>";
        echo ''."$marketInformationContent". "</ul> "; 
            
    }
       
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}

?>


