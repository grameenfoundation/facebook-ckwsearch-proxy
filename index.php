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
        <div>

            <?php
            include 'Models/connection.php';
            include 'Models/Config.php';


            if (isset($_GET["menuId"])) {
                $menuId = $_GET["menuId"];
            } else {
                if ($_SERVER[HTTP_HOST] == 'en.m.applab.org') {
                        $menuId = 'a0Y70000008bdVoE';
                        

                 }elseif ($_SERVER[HTTP_HOST] == 'es.m.applab.org') {
                        $menuId = 'a0Y70000002pSJLE';

                }else {
                        $menuId = "";
                        
                        }
            }
            if (isset($_GET["id"])) {
                $id = $_GET["id"];
            } else {
                $id = "";
            }

            // Back button
            if (isset($_GET["previous"])) {
                $previous = $_GET["previous"];
            } else {
                $previous = "";
            }

            $referer = $_SERVER['HTTP_REFERER'];

            function substrword($str, $begin, $length) {
                if (($begin + $length) < strlen($str)) {
                    return substr($str, $begin, $length) . current(explode(' ', substr($str, $length))) . ' ...';
                } else {
                    return $str;
                }
            }

            if ($connection) {
                if ($menuId == "") {

                    //select Ids from Menu
                    $getMenu = ("select * from menu order by label asc");
                    $resultMenu = mysqli_query($connection, $getMenu);

                    if ($resultMenu) {

                        while ($menuObj = $resultMenu->fetch_object()) {
                            if (in_array($menuObj->id, $allowedMenuId)) {
                                echo "</br>";
                                echo '' . "<ul id='menu'>";
                                echo "" . "<li ><a href='index.php?menuId=" . $menuObj->id . "' title='Next Page' class='SubMenu' >" . $menuObj->label . "</a></li><ul>";
                                echo "" . "</ul>";
                            }
                        }
                    } else {
                        echo 'no menus';
                    }
                } elseif ($menuId != "") {

                    if ($id == "") {

                        //backButton Implementation
                        if ($_SERVER[HTTP_HOST] == 'en.m.applab.org' || $_SERVER[HTTP_HOST] == 'es.m.applab.org' ){
                            //do nothing

                        }else{
                            //backButton display
                            echo "</br>";
                            echo ""."<div id='block_container'><div id='bloc1'><a href='index.php'> << Home </a></div></div>";

                        }

                        $subMenuQuery = ("select * from menuitem where parentid='$id' and menuid='$menuId' order by position asc, label asc");
                        $subMenuResult = mysqli_query($connection, $subMenuQuery)
                                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));

                        while ($subMenuObj = $subMenuResult->fetch_object()) {

                            //check if Id is not in hidden MenuItem arraylist
                            if (!in_array($subMenuObj->id, $hiddenMenuItemId)) {
                                    
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
                            }
                        }
                    } elseif ($id != "") {
                        
                        $subMenuQuery = ("select * from menuitem where parentid='$id' and menuid='$menuId' order by position asc, label asc");
                        $subMenuResult = mysqli_query($connection, $subMenuQuery)
                                or die('Invalid query for selecting getMenuItemLabel: ' . mysqli_error($connection));
                        
                        //Back Button implementation
                        $parentIdQuery = ("select parentid from menuitem where id='$id' and menuid='$menuId' order by position asc, label asc");
                        $parentIdResult = mysqli_query($connection, $parentIdQuery)
                                or die('Invalid query for selecting parentID: ' . mysqli_error($connection));
                        $parentIdObj = $parentIdResult->fetch_object();
                        $previous=$parentIdObj->parentid;
                        echo '' . "</br>";
                        //check for en and es
                        echo "<div id='block_container'><div id='bloc1'><a href='index.php'> << Home </a></div><div id='bloc2'><a href='index.php?id=" . $previous . "&menuId=" . $menuId . "' title='Back Page' class='SubMenu' ><< Back</a></div></div>";

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
                                echo "" . "<li ><a href='end.php?id=" . $subMenuObj->id . "&menuId=" . $menuId . "' title='Next Page' class='SubMenu' >" . $subMenuObj->label . "</a></li>";
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
        </br>
        
        <font size="1" style="arial">Copyright (c) 2015 Grameen Foundation </font>
    <body/>

    <html/>
