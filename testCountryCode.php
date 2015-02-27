<!--
/*
 * Copyright (c) 2015 AppLab, Grameen Foundation
 *
 *  Facebook MVP 
 *  
 *  
 **/

-->
<?php include 'base.php' ?>
<html>
<body>

<?php 
 

$gr_url ="http://grameenfoundation.force.com/ckwsearch/SearchGetRequest?data=%7B%22imei%22%3A%2212312323123123%22%7D&method=countryCode";
$response = file_get_contents($gr_url);

echo "</br>";
$result = json_decode($response);
foreach($result as $data) {
  echo $data."</br>";
}
?>



    
</body>
</html>