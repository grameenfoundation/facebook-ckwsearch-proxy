<!--
/*
 * Copyright (c) 2015 AppLab, Grameen Foundation
 *
 *  facebook-ckwsearch-proxy
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
                <img class="logo" typeof="foaf:Image" src="images/grameen.png" > 
            </div>
        </div>
        </br>

        <div>
            <?php
            include 'Models/connection.php';

            if (isset($_GET["menuId"])) {
                $menuId = $_GET["menuId"];
            } else {
                $menuId = "";
            }
            if (isset($_GET["id"])) {
                $id = $_GET["id"];
            } else {
                $id = "";
            }

            $referer = $_SERVER['HTTP_REFERER'];
            
            echo "<div id='block_container'><div id='bloc1'><a href='index.php'> << Home </a></div>"."<div id='bloc2'><a href='$referer'> << Back </a></div></div>";

            $queryLastChild = ("select content from menuitem where menuid='$menuId' and id='$id'");
            $resultLastChild = mysqli_query($connection, $queryLastChild)
                    or die('Invalid query for selecting last level content ' . mysqli_error($connection));
            $contentObj = $resultLastChild->fetch_object();
            $content = $contentObj->content;

                echo "" . "<ul id='menu'>";
                echo "" . $content . "</ul> ";
            
            ?>
        </div>
        <small>Copyright (c) 2015 Grameen Foundation </small>
    <body/>

    <html/>