<!--
/*
 * Copyright (c) 2015 AppLab, Grameen Foundation
 *
 *  Facebook MVP 
 *  
 *  
 **/
-->

<html>
    <head>
        <meta name="viewport" content="width=device-width" />
        <link href="Css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div>
            <div>
                <img class="logo" typeof="foaf:Image" src="images/image2.png" > 
            </div>
        </div>
        <div>
            <?php
            include 'Models/connection.php';
            include 'Models/Config.php';

            if ($connection) {

                //select Ids from Menu
                $getMenu = ("select * from menu order by label asc");
                $resultMenu = mysqli_query($connection, $getMenu);

                if ($resultMenu) {

                    while ($menuObj = $resultMenu->fetch_object()) {
                        if (!in_array($menuObj->id, $hiddenMenuId)) {

                            echo '' . "<ul id='menu' style='color:#0000FF'>";
                            echo "" . "<li ><a href='subMenu.php?menuIDS=" . $menuObj->id . "' title='Next Page' class='SubMenu' >" . $menuObj->label . "</a></li>";
                            echo '' . "";
                        }
                    }
                } else {
                    die('Invalid query for selecting menuItems: ' . mysqli_error($connection));
                }
            } else {

                die('Error connecting to Db' . mysqli_error($connection));
            }
            ?>
        </div>
        <small>Copyright (c) 2015 Grameen Foundation </small>
    <body/>

    <html/>