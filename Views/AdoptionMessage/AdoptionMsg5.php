

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
   
    //select Mixed farming menu Item where parent parent_id=a0r70000000TGjuA
        $Mixedfarmingquery=("select * from menu_Item where parent_id='a0r70000000TGjuA' order by label asc");
        $MixedfarmingResult = mysqli_query($connection,$Mixedfarmingquery)                
                or die('Invalid query for selecting Heat detection in Cattle: ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($MixedfarmingObj = $MixedfarmingResult->fetch_object()) {
        $MixedfarmingIDS=$MixedfarmingObj->id;
        $MixedfarmingLabels=$MixedfarmingObj->label;
        $MixedfarmingContent=$MixedfarmingObj->content;
         
        printf ("%s \n", $MixedfarmingIDS);
        
        $path='/AdoptionMessage/Mixedfarming';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$MixedfarmingLabels</a></li>";
        echo ''."$MixedfarmingContent". "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>



    
