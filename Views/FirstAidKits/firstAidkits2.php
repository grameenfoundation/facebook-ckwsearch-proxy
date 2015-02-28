

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
   
    //select a0r70000000UBkRA    Beans
        $beansquery=("select * from menu_Item where parent_id='a0r70000000UBkRA' order by label asc");
        $beansResult = mysqli_query($connection,$beansquery)                
                or die('Invalid query for selecting Beans ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($beansObj = $beansResult->fetch_object()) {
        $beansIDS=$beansObj->id;
        $beansLabels=$beansObj->label;
        $beansContent=$beansObj->content;
         
        printf ("%s \n", $beansIDS);
        
        $path='beans';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$beansLabels</a></li>";
        echo ''."$beansContent". "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>



