

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
   
    //select a0r70000000TiKlA Banana
        $Bananaquery=("select * from menu_Item where parent_id='a0r70000000TiKlA' order by label asc");
        $BananaResult = mysqli_query($connection,$Bananaquery)                
                or die('Invalid query for selecting Animals ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($BananaObj = $BananaResult->fetch_object()) {
        $BananaIDS=$BananaObj->id;
        $BananaLabels=$BananaObj->label;
        $BananaContent=$BananaObj->content;
         
        printf ("%s \n", $BananaIDS);
        
        $path='Banana';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$BananaLabels</a></li>";
        echo ''."$BananaContent". "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>



