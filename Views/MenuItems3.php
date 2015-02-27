<!--
/*
 * Copyright (c) 2015 AppLab, Grameen Foundation
 *
 *  Facebook MVP 
 *  
 *  
 **/
-->
<?php include '../base.php';
include '../Db/connection.php';


if($connection){
   
    //select  a0r70000000TiIpA-CKW Help ,
        $CKWHelpquery=("select * from menu_Item where parent_id='a0r70000000TiIpA' order by label asc");
        $CKWHelpResult = mysqli_query($connection,$CKWHelpquery)                
                or die('Invalid query for selecting a0r70000000TiIpA-CKW Help ,: ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($CKWHelpObj = $CKWHelpResult->fetch_object()) {
        $CKWHelpIDS=$CKWHelpObj->id;
        $CKWHelpLabels=$CKWHelpObj->label;
        $CKWHelpContent=$CKWHelpObj->content;
         
         printf ("%s \n", $CKWHelpIDS);
        
        $path='CKWHelp/CKWHelp';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$CKWHelpLabels</a></li>";
        echo ''."$CKWHelpContent". "</ul> "; 
            

    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


