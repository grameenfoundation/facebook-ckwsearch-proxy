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
   
    //select  a0r70000000StF8A-Local Knowledge ,  
        $LocalKnowledgequery=("select * from menu_Item where parent_id='a0r70000000StF8A' order by label asc");
        $LocalKnowledgeResult = mysqli_query($connection,$LocalKnowledgequery)                
                or die('Invalid query for selecting Local Knowledge ,: ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($LocalKnowledgeObj = $LocalKnowledgeResult->fetch_object()) {
        $LocalKnowledgeIDS=$LocalKnowledgeObj->id;
        $LocalKnowledgeLabels=$LocalKnowledgeObj->label;
        $LocalKnowledgeContent=$LocalKnowledgeObj->content;
         
         printf ("%s \n", $LocalKnowledgeIDS);
        
        $path='LocalKnowledge/LocalKnowledge';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$LocalKnowledgeLabels</a></li>";
        echo ''."$LocalKnowledgeContent". "</ul> "; 
            
    }
       
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}

?>


