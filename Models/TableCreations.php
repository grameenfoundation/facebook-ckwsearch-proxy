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
include 'connection.php';

$menuDrop = ('Drop table IF EXISTS menu');
$menuItemDrop = ('Drop table IF EXISTS menuitem');
$imageDrop = ('Drop table IF EXISTS image');

$menuDropResult = mysqli_query($connection, $menuDrop);
if (!$menuDropResult) {
    die('Invalid query dropping menu: ' . mysqli_error($connection));
} else{  echo "Successfully dropped Menu ";}

$menuItemDropResult = mysqli_query($connection, $menuItemDrop);
if (!$menuItemDropResult) {
    die('Invalid query dropping MenuItem: ' . mysqli_error($connection));
} else{  echo "Successfully dropped MenuItem ";}

$imageDropResult = mysqli_query($connection, $imageDrop);
if (!$imageDropResult) {
    die('Invalid query dropping Image table: ' . mysqli_error($connection));
} else{  echo "Successfully dropped image";}

$menuQuery = ('create table if not exists menu(id char(16) primary key,label text not null)');
$menuItemQuery = ('create table if not exists menuitem(id char(16) primary key,label text not null,'
        . 'menuid char(16),parentid char(16),position integer ,content text,attachmentid char(16))');
//FOREIGN KEY(menu_id) REFERENCES menu (id) ON DELETE CASCADE ON UPDATE CASCADE)
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

