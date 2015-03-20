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

$host="localhost";
$uname="root";
$pass="";
$database = "gfsearch";
  
$connection=mysqli_connect($host,$uname,$pass) 
or die("Database Connection Failed");
$selectdb=mysqli_select_db($connection,$database) or die("Database could not be selected"); 
$result=mysqli_select_db($connection,$database)
or die("database cannot be selected <br>");
?>

