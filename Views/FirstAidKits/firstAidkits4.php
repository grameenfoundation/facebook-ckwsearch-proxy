

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
   
    //select a0r70000000UBkWA    Maize
        $maizequery=("select * from menu_Item where parent_id='a0r70000000UBkWA' order by label asc");
        $maizeResult = mysqli_query($connection,$maizequery)                
                or die('Invalid query for selecting Beans ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($maizeObj = $maizeResult->fetch_object()) {
        $maizeIDS=$maizeObj->id;
        $maizeLabels=$maizeObj->label;
        $maizeContent=$maizeObj->content;
         
        printf ("%s \n", $maizeIDS);
        
        $path='beans';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$maizeLabels</a></li>";
        echo ''."$maizeContent". "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>



