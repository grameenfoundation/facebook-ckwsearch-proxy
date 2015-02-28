

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
   
    //select a0r70000000Su44A   Other District Service Providers

    
        $ODSPquery=("select * from menu_Item where parent_id='a0r70000000Su44A' order by label asc");
        $ODSPResult = mysqli_query($connection,$ODSPquery)                
                or die('Invalid query for selecting DVO ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($ODSPObj = $ODSPResult->fetch_object()) {
        $ODSPIDS=$ODSPObj->id;
        $ODSPLabels=$ODSPObj->label;
        $ODSPContent=$ODSPObj->content;
         
        printf ("%s \n", $ODSPIDS);
        
        $path='ODSP';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$ODSPLabels</a></li>";
        echo ''."$ODSPContent". "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>



