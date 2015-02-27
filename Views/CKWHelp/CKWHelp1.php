

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
   
    //select a0r70000000TiIuA FAQS
        $FAQSquery=("select * from menu_Item where parent_id='a0r70000000TiIuA' order by label asc");
        $FAQSResult = mysqli_query($connection,$FAQSquery)                
                or die('Invalid query for selecting Cattle ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($FAQSObj = $FAQSResult->fetch_object()) {
        $FAQSIDS=$FAQSObj->id;
        $FAQSLabels=$FAQSObj->label;
        $FAQSContent=$FAQSObj->content;
         
        printf ("%s \n", $FAQSIDS);
        
        $path='FAQS';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$FAQSLabels</a></li>";
        echo ''."$FAQSContent". "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>



