

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
   
    //select a0r70000000Su43A    NAADS Service providers

    
        $NAADSquery=("select * from menu_Item where parent_id='a0r70000000Su43A' order by label asc");
        $NAADSResult = mysqli_query($connection,$NAADSquery)                
                or die('Invalid query for selecting DVO ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($NAADSObj = $NAADSResult->fetch_object()) {
        $NAADSIDS=$NAADSObj->id;
        $NAADSLabels=$NAADSObj->label;
        $NAADSContent=$NAADSObj->content;
         
        printf ("%s \n", $NAADSIDS);
        
        $path='NAADS';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$NAADSLabels</a></li>";
        echo ''."$NAADSContent". "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>



