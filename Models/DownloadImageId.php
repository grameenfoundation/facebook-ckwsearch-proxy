<!--
/*
 * Copyright (c) 2015 AppLab, Grameen Foundation
 *
 *  facebook-ckwsearch-proxy
 *  
 *  
 **/
-->

<?php
include 'TableCreations.php';
include 'Config.php';

class Image {
    
}

$downloadImageIds = new Image();

//fetch Contents from salesforce
$imageIdUrl="http://grameenfoundation.force.com/ckwsearch/SearchGetRequest?data=%7B%0A%22imei%22%3A%20%22355435053574074%22%2C%20%22keywordsVersion%22%3A%222014-01-01%2000%3A00%3A00%22%2C%0A%22ImagesLastUpdatedDate%22%3A%222014-01-01%2000%3A00%3A00%22%0A%7D%0A&method=keywords";

$response = file_get_contents($imageIdUrl);

//decode json string
$downloadImageIds = json_decode($response);

echo "</br>";

$version = $downloadImageIds->{'version'};
$total = $downloadImageIds->{'total'};
$resultMessage = $downloadImageIds->{'resultMessage'};
$resultCode = $downloadImageIds->{'resultCode'};

//getImages
$menuImages = [];
$menuImages = $downloadImageIds->{'images'};

if ($resultCode == '0') {
    echo $resultMessage . "</br>";

    $value = [];
    //loop thru keyword Images
    foreach ($menuImages as $value) {
        $images = $value->{'id'};
        //echo $images."</br>";
        $insertImageIdsQuery = ("insert IGNORE into image (id)values('$images')");
        $result5 = mysqli_query($connection, $insertImageIdsQuery);

        if ($result5) {
            echo " Menu Image ID record created successfully";
        } else {
            die('Invalid query for insertion of imageIDs: ' . mysqli_error($connection));
        }
    }
}
mysqli_close($connection);

