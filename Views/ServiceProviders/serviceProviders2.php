

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
   
    //select a0r70000000Su42A   EADD Service providers

    
        $EADDquery=("select * from menu_Item where parent_id='a0r70000000Su42A' order by label asc");
        $EADDResult = mysqli_query($connection,$EADDquery)                
                or die('Invalid query for selecting DVO ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($EADDObj = $EADDResult->fetch_object()) {
        $EADDIDS=$EADDObj->id;
        $EADDLabels=$EADDObj->label;
        $EADDContent=$EADDObj->content;
         
        printf ("%s \n", $EADDIDS);
        
        $path='EADD';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$EADDLabels</a></li>";
        echo ''."$EADDContent". "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>



