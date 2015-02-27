

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
   
    //select Farmer Group formation of menu Item where parent parent_id='a0r70000000TGjLA '
        $FarmerGroupformationquery=("select * from menu_Item where parent_id='a0r70000000TGjLA' order by label asc");
        $FarmerGroupformationResult = mysqli_query($connection,$FarmerGroupformationquery)                
                or die('Invalid query for selecting Heat detection in Cattle: ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($FarmerGroupformationObj = $FarmerGroupformationResult->fetch_object()) {
        $FarmerGroupformationIDS=$FarmerGroupformationObj->id;
        $FarmerGroupformationLabels=$FarmerGroupformationObj->label;
        $FarmerGroupformationContent=$FarmerGroupformationObj->content;
         
        printf ("%s \n", $FarmerGroupformationIDS);
        
        $path='/AdoptionMessage/FarmerGroupformation';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$FarmerGroupformationLabels</a></li>";
        echo ''.$FarmerGroupformationContent. "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>



