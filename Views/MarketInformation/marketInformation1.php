

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
   
    //select a0r70000000VdVgA    Market Prices
        $marketPricesquery=("select * from menu_Item where parent_id='a0r70000000VdVgA' order by label asc");
        $marketPricesResult = mysqli_query($connection,$marketPricesquery)                
                or die('Invalid query for selecting Market Prices ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($marketPricesObj = $marketPricesResult->fetch_object()) {
        $marketPricesIDS=$marketPricesObj->id;
        $marketPricesLabels=$marketPricesObj->label;
        $marketPricesContent=$marketPricesObj->content;
         
        printf ("%s \n", $marketPricesIDS);
        
        $path='marketPrices';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$marketPricesLabels</a></li>";
        echo ''."$marketPricesContent". "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>



