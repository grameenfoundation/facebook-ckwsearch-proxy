

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
   
    //select a0r70000000SuHqA  MobileMoney Agents

  
    
        $mobileMoneyAgentsquery=("select * from menu_Item where parent_id='a0r70000000SuHqA' order by label asc");
        $mobileMoneyAgentsResult = mysqli_query($connection,$mobileMoneyAgentsquery)                
                or die('Invalid query for selecting mobileMoneyAgents ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($mobileMoneyAgentsObj = $mobileMoneyAgentsResult->fetch_object()) {
        $mobileMoneyAgentsIDS=$mobileMoneyAgentsObj->id;
        $mobileMoneyAgentsLabels=$mobileMoneyAgentsObj->label;
        $mobileMoneyAgentsContent=$mobileMoneyAgentsObj->content;
         
        printf ("%s \n", $mobileMoneyAgentsIDS);
        
        $path='mobileMoneyAgents';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$mobileMoneyAgentsLabels</a></li>";
        echo ''."$mobileMoneyAgentsContent". "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>



