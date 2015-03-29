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

            function substrword($str, $begin, $length) {
                if (($begin + $length) < strlen($str)) {
                    return substr($str, $begin, $length) . current(explode(' ', substr($str, $length))) . ' ...';
                } else {
                    return $str;
                }
            }

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
            if ($connection) {
                if ($menuId == "") {

                    //select Ids from Menu
                    $getMenu = ("select * from menu order by label asc");
                    $resultMenu = mysqli_query($connection, $getMenu);

                    if ($resultMenu) {

                        while ($menuObj = $resultMenu->fetch_object()) {
                            if (!in_array($menuObj->id, $hiddenMenuId)) {
                                echo "</br>";
                                echo '' . "<ul id='menu'>";
                                echo "" . "<li ><a href='index.php?menuId=" . $menuObj->id . "' title='Next Page' class='SubMenu' >" . $menuObj->label . "</a></li><ul>";
                                echo "" . "</ul>";
                            }
                        }
                    }
                } elseif ($menuId != "") {
                    if ($id == "") {
                        $subMenuQuery = ("select * from menuitem where parentid='$id' and menuid='$menuId' order by position asc, label asc");
                        $subMenuResult = mysqli_query($connection, $subMenuQuery)
                                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
                        echo '' . "</br>";
                        while ($subMenuObj = $subMenuResult->fetch_object()) {

                            //check if Id is not in hidden MenuItem arraylist
                            if (!in_array($subMenuObj->id, $hiddenMenuItemId)) {

                                if (strpos($subMenuObj->content, 'No Content') !== FALSE) {
                                    //$subMenuObj->content = '';
                                    echo "" . "<ul id='menuItem'>";
                                    echo "" . "<li ><a href='index.php?id=" . $subMenuObj->id . "&menuId=" . $menuId . "' title='Next Page' class='SubMenu' >" . $subMenuObj->label . "</a></li>";
                                    echo "" . "</ul> ";
                                } else {
                                    echo "" . "<ul id='menuItem'>";
                                    echo "" . "<li ><a href='index.php?id=" . $subMenuObj->id . "&menuId=" . $menuId . "' title='Next Page' class='SubMenu' >" . $subMenuObj->label . "</a></li>";
                                    $subContent = explode('Attribution:', $subMenuObj->content);
                                    echo "" . substrword($subContent[0], 0, 120) . "</ul> ";
                                }
                            }
                        }
                    } elseif ($id != "") {

                        $subMenuQuery = ("select * from menuitem where parentid='$id' and menuid='$menuId' order by position asc, label asc");
                        $subMenuResult = mysqli_query($connection, $subMenuQuery)
                                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
                        echo '' . "</br>";

                        while ($subMenuObj = $subMenuResult->fetch_object()) {

                            $query = ("select count(id) as no from menuitem where parentid='$subMenuObj->id'");
                            $result = mysqli_query($connection, $query)
                                    or die('Invalid query for selecting parentId: ' . mysqli_error($connection));
                            $countObj = $result->fetch_object();
                            $count = $countObj->no;

                            //check If there are sub menus
                            if ($count != '0') {
                                if (strpos($subMenuObj->content, 'No Content') !== FALSE) {

                                    echo "" . "<ul id='menuItem'>";
                                    echo "" . "<li ><a href='index.php?id=" . $subMenuObj->id . "&menuId=" . $menuId . "' title='Next Page' class='SubMenu' >" . $subMenuObj->label . "</a></li>";
                                    echo "" . "</ul> ";
                                } else {
                                    echo "" . "<ul id='menuItem'>";
                                    echo "" . "<li ><a href='index.php?id=" . $subMenuObj->id . "&menuId=" . $menuId . "' title='Next Page' class='SubMenu' >" . $subMenuObj->label . "</a></li>";
                                    $subContent = explode('Attribution:', $subMenuObj->content);
                                    echo "" . substrword($subContent[0], 0, 120) . "</ul> ";
                                }
                            } elseif ($count == '0') {


                                echo "" . "<ul id='menuItem'>";
                                echo "" . "<li ><a href='finalDisplay.php?id=" . $subMenuObj->id . "&menuId=" . $menuId . "' title='Next Page' class='SubMenu' >" . $subMenuObj->label . "</a></li>";
                                $subContent = explode('Attribution:', $subMenuObj->content);
                                echo "" . substrword($subContent[0], 0, 120) . "</ul> ";
                            }
                        }
                        
                    }
                }
            } else {

                die('Error connecting to Db' . mysqli_error($connection));
            }
            ?>
        </div>
        <small>Copyright (c) 2015 Grameen Foundation </small>
    <body/>

    <html/>