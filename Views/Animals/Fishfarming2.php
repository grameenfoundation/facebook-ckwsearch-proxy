
    
    


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
   
    //select a0r70000000USyqA Feeding your fish
        $Feedingfishquery=("select * from menu_Item where parent_id='a0r70000000USyqA' order by label asc");
        $FeedingfishResult = mysqli_query($connection,$Feedingfishquery)                
                or die('Invalid query for selecting Feeding your fish: ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($FeedingfishObj = $FeedingfishResult->fetch_object()) {
        $FeedingfishIDS=$FeedingfishObj->id;
        $FeedingfishLabels=$FeedingfishObj->label;
        $FeedingfishContent=$FeedingfishObj->content;
         
        printf ("%s \n", $FeedingfishIDS);
        
        $path='Feedingfish';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$FeedingfishLabels</a></li>";
        echo ''."$FeedingfishContent". "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>



    