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
   
    //select  a0r70000000TQG3A-Uganda Budget Information ,  
        $ugandaBudgetInformationquery=("select * from menu_Item where parent_id='a0r70000000TQG3A' order by label asc");
        $ugandaBudgetInformationResult = mysqli_query($connection,$ugandaBudgetInformationquery)                
                or die('Invalid query for selecting Uganda Budget Information: ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($ugandaBudgetInformationObj = $ugandaBudgetInformationResult->fetch_object()) {
        $ugandaBudgetInformationIDS=$ugandaBudgetInformationObj->id;
        $ugandaBudgetInformationLabels=$ugandaBudgetInformationObj->label;
        $ugandaBudgetInformationContent=$ugandaBudgetInformationObj->content;
         
         printf ("%s \n", $ugandaBudgetInformationIDS);
        
        $path='UgandaBudgetInformation/ugandaBudgetInformation';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$ugandaBudgetInformationLabels</a></li>";
        echo ''."$ugandaBudgetInformationContent". "</ul> "; 
            
    }
       
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}

?>


