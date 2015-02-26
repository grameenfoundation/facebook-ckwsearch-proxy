<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'connection.php';
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
 
 //get menus
 $menus=array();
 $menus=$boo->{'menus'};
 
 
 //getmenuItems
 $menuItems=array();
 $menuItems=$boo->{'menuItems'};
 
 
 
  //echo $total. "</br>";

  if($resultCode=='0'){
    echo $resultMessage. "</br>"; 
   
   //loop thru menus 
   $value=array(); 
    foreach ($menus as $value) {
    
    $menuId= $value->{'id'};
    $menuLabel= $value->{'label'};
   
    //QUERY to update menus
    $query3=("UPDATE menu SET lastname='Doe' WHERE id=2");
      
    $result3 = mysqli_query($connection,$query3);
    
    if ($result3) {
       echo " Menu Record updated successfully";
        
    }  else {
        die('Error updating record:  ' . mysqli_error($connection));    
    }
    echo ''. "</br>";
    //loop thru menu Items
    foreach ($menuItems as $value) {
        $menuItemId= $value->{'id'};
        $menuItemLabel= $value->{'label'};
        $position= $value->{'position'};
        $parentid= $value->{'parent_id'};
        $menuid= $value->{'menu_id'};
        $content= $value->{'content'};
        
       //query to update menu Items
        $query4=("UPDATE MyGuests SET lastname='Doe' WHERE id=2");
        $result4 = mysqli_query($connection,$query4);
    
    if ($result4) {
       echo "Menu Item Record updated successfully";
        
    }  else {
        die('Error updating record:  ' . mysqli_error($connection));    
    }
        
    }
    
}
    
  }  else {
    echo 'Not Found'. "</br>";
    echo $resultMessage. "</br>"; 
}
  


?>