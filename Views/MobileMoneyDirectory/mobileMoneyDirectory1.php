

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
   
    //select a0r70000000SuHrA  How to

    
        $howtoquery=("select * from menu_Item where parent_id='a0r70000000SuHrA' order by label asc");
        $howtoResult = mysqli_query($connection,$howtoquery)                
                or die('Invalid query for selecting Market Prices ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($howtoObj = $howtoResult->fetch_object()) {
        $howtoIDS=$howtoObj->id;
        $howtoLabels=$howtoObj->label;
        $howtoContent=$howtoObj->content;
         
        printf ("%s \n", $howtoIDS);
        
        $path='bananas';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$howtoLabels</a></li>";
        echo ''."$howtoContent". "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>



