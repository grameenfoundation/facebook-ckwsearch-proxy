




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
   
    //select a0r70000000UBmIA    Coffee
        $coffeequery=("select * from menu_Item where parent_id='a0r70000000UBmIA' order by label asc");
        $coffeeResult = mysqli_query($connection,$coffeequery)                
                or die('Invalid query for selecting coffee ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($coffeeObj = $coffeeResult->fetch_object()) {
        $coffeeIDS=$coffeeObj->id;
        $coffeeLabels=$coffeeObj->label;
        $coffeeContent=$coffeeObj->content;
         
        printf ("%s \n", $coffeeIDS);
        
        $path='coffee';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$coffeeLabels</a></li>";
        echo ''."$coffeeContent". "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>



