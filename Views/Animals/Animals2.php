

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
   
    //select a0r70000000TidDA Cattle
        $Cattlequery=("select * from menu_Item where parent_id='a0r70000000TidDA' order by label asc");
        $CattleResult = mysqli_query($connection,$Cattlequery)                
                or die('Invalid query for selecting Cattle ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($CattleObj = $CattleResult->fetch_object()) {
        $CattleIDS=$CattleObj->id;
        $CattleLabels=$CattleObj->label;
        $CattleContent=$CattleObj->content;
         
        printf ("%s \n", $CattleIDS);
        
        $path='/AdoptionMessage/Cattle';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$CattleLabels</a></li>";
        echo ''."$CattleContent". "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>



