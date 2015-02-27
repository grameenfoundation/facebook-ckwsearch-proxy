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

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 $gr_url=array();
 $response=array();

$gr_url = "http://grameenfoundation.force.com/ckwsearch/SearchGetRequest?data=%7B%22imei%22%3A355435%2F05%2F357407%2F4%7D&method=images";
$response =file_get_contents($gr_url);


echo $response;
echo "</br>";
/*$result = json_decode($response);
foreach($result as $data) {
  echo $data."</br>";
}*/
?>
