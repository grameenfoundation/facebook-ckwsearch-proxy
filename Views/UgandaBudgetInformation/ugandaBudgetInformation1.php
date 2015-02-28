

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
   
    //select a0r70000000TQG4A West
        $westquery=("select * from menu_Item where parent_id='a0r70000000TQG4A' order by label asc");
        $westResult = mysqli_query($connection,$westquery)                
                or die('Invalid query for selecting Animals ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($westObj = $westResult->fetch_object()) {
        $westIDS=$westObj->id;
        $westLabels=$westObj->label;
        $westContent=$westObj->content;
         
        printf ("%s \n", $westIDS);
        
        $path='West';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$westLabels</a></li>";
        echo ''."$westContent". "</ul> "; 
            
    }
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>



