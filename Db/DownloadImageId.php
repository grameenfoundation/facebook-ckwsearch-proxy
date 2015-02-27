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



include 'TableCreations.php';

class foo{}
$boo=new foo();


//get Contents from salesforce
$gr_url = "http://grameenfoundation.force.com/ckwsearch/SearchGetRequest?data=%7B%0A%22imei%22%3A%20%22355435053574074%22%2C%20%22keywordsVersion%22%3A%222014-01-01%2000%3A00%3A00%22%2C%0A%22ImagesLastUpdatedDate%22%3A%222014-01-01%2000%3A00%3A00%22%0A%7D%0A&method=keywords";
$response = file_get_contents($gr_url);

//decode json string
$boo =  json_decode($response);

echo "</br>";

 $version = $boo->{'version'};
 $total = $boo->{'total'};
 $resultMessage = $boo->{'resultMessage'};
 $resultCode = $boo->{'resultCode'};
 
 /*
  "deletedMenuItems" : null,
  "deletedImages" : null */
 
 //get menus
 $menus=array();
 $menus=$boo->{'menus'};
 
 
 //getmenuItems
 $menuItems=array();
 $menuItems=$boo->{'menuItems'};
 
 //getImages
 $menuImages=array();
 $menuImages=$boo->{'images'};
 
  //echo $total. "</br>";

  if($resultCode=='0'){
    echo $resultMessage. "</br>"; 
    
    $value=array();
     //loop thru keyword Images
    foreach ($menuImages as $value) {
        $images= $value->{'id'};
        echo $images."</br>";
        
    $query5=("insert IGNORE into image (id)values('$images')");
      
    $result5 = mysqli_query($connection,$query5);
    
    if ($result5) {
       echo " Menu Image ID record created successfully";
        
    }  else {
        die('Invalid query for insertion of imageIDs: ' . mysqli_error($connection));    
    }
         
    }
    
  }

  mysqli_close($connection);

?>