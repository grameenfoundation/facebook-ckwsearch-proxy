
<?php include 'index.php' ?>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$gr_url = "http://grameenfoundation.force.com/ckwsearch/SearchGetRequest?data=%7B%22imei%22%3A%2212312323123123%22%7D&method=keywords";
$response = file_get_contents($gr_url);

//echo $response;

echo "</br>";
$result = json_decode($response);
foreach($result as $data) {
  echo $data."</br>"; 
}
?>
