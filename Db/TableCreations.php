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
include 'connection.php';
$query1=('create table if not exists menu(id char(16) primary key,label text not null)');
$query2=('create table if not exists menu_item(id char(16) primary key,label text not null,'
        . 'menu_id char(16),parent_id char(16),position integer ,content text,attachment_id char(16), FOREIGN KEY(menu_id) REFERENCES menu (id) ON DELETE CASCADE ON UPDATE CASCADE)');

//,FOREIGN KEY(parent_id) REFERENCES menu_item (id) ON DELETE CASCADE ON UPDATE CASCADE 
$Imagequery=('create table if not exists image(id char(16) primary key)');

//ON DUPLICATE KEY UPDATE 

$result1 = mysqli_query($connection,$query1);
if (!$result1) {
    die('Invalid query Creation menu: ' . mysqli_error($connection));
} 

$result2 = mysqli_query($connection,$query2);
if (!$result2) {
    die('Invalid query Creation MenuItem: ' . mysqli_error($connection));
}


$imageResult = mysqli_query($connection,$Imagequery);
if (!$imageResult) {
    die('Invalid query Creation Image table: ' . mysqli_error($connection));
} 


?>
