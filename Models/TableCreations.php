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
$menuQuery = ('create table if not exists menu(id char(16) primary key,label text not null)');
$menuItemQuery = ('create table if not exists menu_item(id char(16) primary key,label text not null,'
        . 'menu_id char(16),parent_id char(16),position integer ,content text,attachment_id char(16), FOREIGN KEY(menu_id) REFERENCES menu (id) ON DELETE CASCADE ON UPDATE CASCADE)');

//,FOREIGN KEY(parent_id) REFERENCES menu_item (id) ON DELETE CASCADE ON UPDATE CASCADE 
$Imagequery = ('create table if not exists image(id char(16) primary key)');


$menuResult = mysqli_query($connection, $menuQuery);
if (!$menuResult) {
    die('Invalid query Creation menu: ' . mysqli_error($connection));
}

$menuItemResult = mysqli_query($connection, $menuItemQuery);
if (!$menuItemResult) {
    die('Invalid query Creation MenuItem: ' . mysqli_error($connection));
}


$imageResult = mysqli_query($connection, $Imagequery);
if (!$imageResult) {
    die('Invalid query Creation Image table: ' . mysqli_error($connection));
} 

