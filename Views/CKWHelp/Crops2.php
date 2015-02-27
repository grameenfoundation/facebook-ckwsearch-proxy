

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
   
    //select a0r70000000TiLuA   Coffee
        $Coffeequery=("select * from menu_Item where parent_id='a0r70000000TiLuA' order by label asc");
        $CoffeeResult = mysqli_query($connection,$Coffeequery)                
                or die('Invalid query for selecting Animals ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($CoffeeObj = $CoffeeResult->fetch_object()) {
        $CoffeeIDS=$CoffeeObj->id;
        $CoffeeLabels=$CoffeeObj->label;
        $CoffeeContent=$CoffeeObj->content;
         
        printf ("%s \n", $CoffeeIDS);
        
        $path='Coffee';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$CoffeeLabels</a></li>";
        echo ''."$CoffeeContent". "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>



