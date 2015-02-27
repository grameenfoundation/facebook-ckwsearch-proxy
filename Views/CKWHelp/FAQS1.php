





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
   
    //select a0r70000000TiIzA  Animals
        $Animalsquery=("select * from menu_Item where parent_id='a0r70000000TiIzA' order by label asc");
        $AnimalsResult = mysqli_query($connection,$Animalsquery)                
                or die('Invalid query for selecting Animals ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($AnimalsObj = $AnimalsResult->fetch_object()) {
        $AnimalsIDS=$AnimalsObj->id;
        $AnimalsLabels=$AnimalsObj->label;
        $AnimalsContent=$AnimalsObj->content;
         
        printf ("%s \n", $AnimalsIDS);
        
        $path='Animals';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$AnimalsLabels</a></li>";
        echo ''."$AnimalsContent". "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>



