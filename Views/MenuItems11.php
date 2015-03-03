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
   
    //select  a0r70000000TSsIA-Weeds,  
        $weedsquery=("select * from menu_Item where parent_id='a0r70000000TSsIA' order by label asc");
        $weedsResult = mysqli_query($connection,$weedsquery)                
                or die('Invalid query for selecting Uganda Budget Information: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($weedsObj = $weedsResult->fetch_object()) {
        $weedsIDS=$weedsObj->id;
        $weedsLabels=$weedsObj->label;
        $weedsContent=$weedsObj->content;
         
        
        if (strpos($weedsContent,'No Content') !== false) {
            $weedsContent='';
        }
        // printf ("%s \n", $weedsIDS);
        
        $path='Weeds/weeds';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$weedsLabels</a></li>";
        echo ''."$weedsContent". "</ul> "; 
            
    }   
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}

?>


