<?php  $var='a0r70000000VdgcA'?><!--
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

if($connection){
   
    //select  Menu Item where id =$var
        $subMenuquery=("select * from menu_Item where parent_id='$var' order by label asc");
        $subMenuResult = mysqli_query($connection,$subMenuquery)                
                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
      
        echo ''. "</br>";
           $num=0;
    while ($subMenuObj = $subMenuResult->fetch_object()) {
        $subMenuIDS=$subMenuObj->id;
        $subMenuLabels=$subMenuObj->label;
        $subMenuContent=$subMenuObj->content;
        
        if (strpos($subMenuContent,'No Content') !== false) {
            $subMenuContent='';
        }
        $path='AdoptionMessage/AdoptionMsg';
        $ext='.php';
        $num =$num+1;
        $str=  strval($num);
        $fullLink=$subMenuIDS.$ext;
        $file =  fopen($fullLink, "c");        
        echo ''."<ul id='menu'>";
        echo ''."<li ><a href=$fullLink>$subMenuLabels</a></li>";
        echo ''."$subMenuContent". "</ul> ";   
        $newPageContent = file_get_contents('/SubMenu.php', true);
        $more="<?php  \$var='$subMenuIDS'?>";
        fwrite($file, $more.$newPageContent);
        fclose($file);      
    }  
}  else {
    die('Error connecting to Db'.mysqli_error($connection));
}
?>


