

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
   
    //select a0r70000000TiJ9A   Maize
        $Coffeequery=("select * from menu_Item where parent_id='a0r70000000TiJ9A' order by label asc");
        $CoffeeResult = mysqli_query($connection,$Coffeequery)                
                or die('Invalid query for selecting Maize ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($MaizeObj = $CoffeeResult->fetch_object()) {
        $MaizeIDS=$MaizeObj->id;
        $MaizeLabels=$MaizeObj->label;
        $MaizeContent=$MaizeObj->content;
         
        printf ("%s \n", $MaizeIDS);
        
        $path='Coffee';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$MaizeLabels</a></li>";
        echo ''."$MaizeContent". "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>



