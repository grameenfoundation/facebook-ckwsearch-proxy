

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
   
    //select Animal disease and parasite control on a farmed of menu Item where parent parent_id='a0r70000000TGj6A'
        $ADPControlquery=("select * from menu_Item where parent_id='a0r70000000TGjpA' order by label asc");
        $ADPControlResult = mysqli_query($connection,$ADPControlquery)                
                or die('Invalid query for selecting Heat detection in Cattle: ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($ADPControlObj = $ADPControlResult->fetch_object()) {
        $ADPControlIDS=$ADPControlObj->id;
        $ADPControlLabels=$ADPControlObj->label;
        $ADPControlContent=$ADPControlObj->content;
         
        printf ("%s \n", $ADPControlIDS);
        
        $path='/AdoptionMessage/ADPControl';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$ADPControlLabels</a></li>";
        echo ''."$ADPControlContent". "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>



