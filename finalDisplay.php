

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