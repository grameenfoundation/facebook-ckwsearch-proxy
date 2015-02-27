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
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $adoptionquery=("select * from menu_Item where parent_id='a0r70000000TGj6A' order by label asc");
        $adoptionResult = mysqli_query($connection,$adoptionquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($adoptionObj = $adoptionResult->fetch_object()) {
        $adoptionIDS=$adoptionObj->id;
        $adoptionLabels=$adoptionObj->label;
        $adoptionContent=$adoptionObj->content;
         
         printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$adoptionLabels</a></li>";
        echo ''."$adoptionContent". "</ul> "; 
            
 
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


