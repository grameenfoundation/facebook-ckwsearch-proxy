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

            if (isset($_GET["menuIDS"])) {
                $menuIDS = $_GET["menuIDS"];
            } else {
                $menuIDS = "";
            }
            if (isset($_GET["id"])) {
                $id = $_GET["id"];
            } else {
                $id = "";
            }

            //select  Menu Item where id = $_GET["id"]
            $subMenuQuery = ("select * from menu_item where parent_id='$id' and menu_id='$menuIDS' order by position asc, label asc");
            $subMenuResult = mysqli_query($connection, $subMenuQuery)
                    or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
            echo '' . "</br>";
            while ($subMenuObj = $subMenuResult->fetch_object()) {
                $subMenuContent = $subMenuObj->content;

                //check if Id is not in hidden MenuItem arraylist
                if (!in_array($subMenuObj->id, $hiddenMenuItemId)) {

                    //select all last level IDS in the tree for CKW Search                
                    $query = ("select count(id) as no from menu_item where parent_id='$subMenuObj->id'");
                    $result = mysqli_query($connection, $query)
                            or die('Invalid query for selecting parentId: ' . mysqli_error($connection));
                    $countObj = $result->fetch_object();
                    $count = $countObj->no;

                    //check if id count is for last level node
                    if ($count == '0') {
                        echo "" . "<ul id='menu'>";
                        echo "" . "<li><b>" . $subMenuObj->label . "</b></li>";
                        echo "" . $subMenuContent . "</ul> ";
                    } else {
                        if (strpos($subMenuContent, 'No Content') !== false) {
                            $subMenuContent = '';
                            echo "" . "<ul id='menuItem'>";
                            echo "" . "<li ><a href='subMenu.php?id=" . $subMenuObj->id . "&menuIDS=" . $menuIDS . "' title='Next Page' class='SubMenu' >" . $subMenuObj->label . "</a></li>";
                            echo "" . "</ul> ";
                        } else {
                            echo "" . "<ul id='menuItem'>";
                            echo "" . "<li ><a href='subMenu.php?id=" . $subMenuObj->id . "&menuIDS=" . $menuIDS . "' title='Next Page' class='SubMenu' >" . $subMenuObj->label . "</a></li>";
                            $subContent = explode('Attribution:', $subMenuContent);
                            echo "" . substr($subContent[0], 0, 120) . "..." . "</ul> ";
                        }
                    }
                }
            }
            ?>
        </div>
        <small>Copyright (c) 2015 Grameen Foundation </small>
    <body/>

    <html/>