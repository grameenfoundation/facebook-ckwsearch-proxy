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
   
    //select  a0r70000000UBk7A-First Aid Kits , 
        $firstAidKitsquery=("select * from menu_Item where parent_id='a0r70000000UBk7A' order by label asc");
        $firstAidKitsResult = mysqli_query($connection,$firstAidKitsquery)                
                or die('Invalid query for selecting First Aid Kits ,: ' . mysqli_error($connection));
        //echo " Record selected successfully";
        
        echo ''. "</br>";
           $num=0;
    while ($firstAidKitsObj = $firstAidKitsResult->fetch_object()) {
        $firstAidKitsIDS=$firstAidKitsObj->id;
        $firstAidKitsLabels=$firstAidKitsObj->label;
        $firstAidKitsContent=$firstAidKitsObj->content;
         
        
        if (strpos($firstAidKitsContent,'No Content') !== false) {
            $firstAidKitsContent='';
        }
        
        // printf ("%s \n", $firstAidKitsIDS);
        
        $path='FirstAidKits/firstAidKits';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$firstAidKitsLabels</a></li>";
        echo ''."$firstAidKitsContent". "</ul> "; 
            
    }
       
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}

?>


