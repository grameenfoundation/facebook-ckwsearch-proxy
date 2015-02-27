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

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include  'connection.php';

$holder='nut,Rice,sim sim,shorgum,millets,Peas. Attribution: Information  provided by gra';
$character_mask=" \t\n\r\0\x0B";
$abc= trim($holder, $character_mask);

$response = mysqli_real_escape_string($connection,$abc);
echo $response;

echo "</br>";
?>