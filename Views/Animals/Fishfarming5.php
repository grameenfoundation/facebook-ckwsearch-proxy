
    


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
   
    //select a0r70000000USylA    Things to consider before starting
        $ThingsToConsiderquery=("select * from menu_Item where parent_id='a0r70000000USylA' order by label asc");
        $ThingsToConsiderResult = mysqli_query($connection,$ThingsToConsiderquery)                
                or die('Invalid query for selecting ThingsToConsider: ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($ThingsToConsiderObj = $ThingsToConsiderResult->fetch_object()) {
        $ThingsToConsiderIDS=$ThingsToConsiderObj->id;
        $ThingsToConsiderLabels=$ThingsToConsiderObj->label;
        $ThingsToConsiderContent=$ThingsToConsiderObj->content;
         
        printf ("%s \n", $ThingsToConsiderIDS);
        
        $path='HarvestingFish';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$ThingsToConsiderLabels</a></li>";
        echo ''."$ThingsToConsiderContent". "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>



