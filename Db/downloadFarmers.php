<!--
/*
 * Copyright (c) 2015 AppLab, Grameen Foundation
 *
 *  Facebook MVP 
 *  
 *  
 **/
-->

<?php


$gr_url=array();
 $response=array();

$gr_url = "http://grameenfoundation.force.com/ckwsearch/SearchGetRequest?data=%7B%22imei%22%3A%22355435053574074%22%2C%20%22farmersVersion%22%3A%222014-11-03%2000%3A00%3A00%22%7D&method=farmers";
$response = file_get_contents($gr_url);

echo $response;

echo "</br>";


?>