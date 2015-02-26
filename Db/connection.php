<?php
  $host="localhost";
  $uname="root";
  $pass="";
  $database = "gfsearch";
  //$link=mysqli;
$connection=mysqli_connect($host,$uname,$pass) 
or die("Database Connection Failed");
$selectdb=mysqli_select_db($connection,$database) or die("Database could not be selected"); 
$result=mysqli_select_db($connection,$database)
or die("database cannot be selected <br>");
?>

