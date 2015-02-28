

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
   
    //select Aa0r70000000UBkHA    Bananas
        $bananasquery=("select * from menu_Item where parent_id='Aa0r70000000UBkHA' order by label asc");
        $bananasResult = mysqli_query($connection,$bananasquery)                
                or die('Invalid query for selecting bananas ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($bananasObj = $bananasResult->fetch_object()) {
        $bananasIDS=$bananasObj->id;
        $bananasLabels=$bananasObj->label;
        $bananasContent=$bananasObj->content;
         
        printf ("%s \n", $bananasIDS);
        
        $path='bananas';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$bananasLabels</a></li>";
        echo ''."$bananasContent". "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>



