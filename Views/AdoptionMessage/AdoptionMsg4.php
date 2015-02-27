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
   
    //select  Market Information Messages of menu Item where parent parent_id='a0r70000000TGj6A'
        $MarketInformationquery=("select * from menu_Item where parent_id='a0r70000000TGjkA' order by label asc");
        $MarketInformationResult = mysqli_query($connection,$MarketInformationquery)                
                or die('Invalid query for selecting Market Information: ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($MarketInformationObj = $MarketInformationResult->fetch_object()) {
        $MarketInformationIDS=$MarketInformationObj->id;
        $MarketInformationLabels=$MarketInformationObj->label;
        $MarketInformationContent=$MarketInformationObj->content;
         
        printf ("%s \n", $MarketInformationIDS);
        
        $path='/AdoptionMessage/MarketInformation';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$MarketInformationLabels</a></li>";
        echo ''."$MarketInformationContent". "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


