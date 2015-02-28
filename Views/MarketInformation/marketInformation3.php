

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
   
    //select a0r70000000Um3zA  Subcounty Market Prices

    
        $SubcountyMarketPricesquery=("select * from menu_Item where parent_id='a0r70000000Um3zA' order by label asc");
        $SubcountyMarketPricesResult = mysqli_query($connection,$SubcountyMarketPricesquery)                
                or die('Invalid query for selecting Subcounty Market Prices ' . mysqli_error($connection));
        echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($SubcountyMarketPricesObj = $SubcountyMarketPricesResult->fetch_object()) {
        $SubcountyMarketPricesIDS=$SubcountyMarketPricesObj->id;
        $SubcountyMarketPricesLabels=$SubcountyMarketPricesObj->label;
        $SubcountyMarketPricesContent=$SubcountyMarketPricesObj->content;
         
        printf ("%s \n", $SubcountyMarketPricesIDS);
        
        $path='subcountyMarketPrices';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$path.$str.$ext;
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$SubcountyMarketPricesLabels</a></li>";
        echo ''."$SubcountyMarketPricesContent". "</ul> "; 
            
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>



