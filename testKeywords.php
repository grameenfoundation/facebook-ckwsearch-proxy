
<?php include 'base.php' ?>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 $gr_url=array();
 $response=array();

$gr_url = "http://grameenfoundation.force.com/ckwsearch/SearchGetRequest?data=%7B%0A%22imei%22%3A%20%22355435053574074%22%2C%20%22keywordsVersion%22%3A%222014-01-01%2000%3A00%3A00%22%2C%0A%22ImagesLastUpdatedDate%22%3A%222014-01-01%2000%3A00%3A00%22%0A%7D%0A&method=keywords";
$response = file_get_contents($gr_url);

echo $response;

echo "</br>";


?>
