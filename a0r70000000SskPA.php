<?php  $var='a0r70000000SskPA'?><!--
/*
 * Copyright (c) 2015 AppLab, Grameen Foundation
 *
 *  Facebook MVP 
 *  
 *  
 **/
-->
<?php 

include 'base.php';
include 'Db/connection.php';


//printf($var);

if($connection){
   
    //select  Adoption Messages of menu Item where parent Id and id=$menuItemIDS
        $subMenuquery=("select * from menu_Item where parent_id='$var' order by label asc");
        $subMenuResult = mysqli_query($connection,$subMenuquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
       // echo " Record selected successfully";
        echo ''. "</br>";
           $num=0;
    while ($subMenuObj = $subMenuResult->fetch_object()) {
        $subMenuIDS=$subMenuObj->id;
        $subMenuLabels=$subMenuObj->label;
        $subMenuContent=$subMenuObj->content;
         
        
        if (strpos($subMenuContent,'No Content') !== false) {
            $subMenuContent='';
        }
        // printf ("%s \n", $adoptionIDS);
        
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        
        $num =$num+1;
        $str=  strval($num);
       $fullLink=$subMenuIDS.$ext;
        
       // printf($fullLink);
        $file =  fopen($fullLink, "c");
        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$subMenuLabels</a></li>";
        echo ''."$subMenuContent". "</ul> "; 
        
        $newPageContent = file_get_contents('/SubMenu.php', true);
       // print_r($newPageContent);
        $more="<?php  \$var='$subMenuIDS'?>";
       
        fwrite($file, $more.$newPageContent);
        fclose($file);
      
    }
    
    
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}


?>


