<?php
/**
 * Created by PhpStorm.
 * User: krant
 * Date: 9/11/2017
 * Time: 12:18 AM
 */
error_reporting(0);
session_start();
include("config.php");
$my_connection = mysql_connect($db_host, $db_user, $db_pass) or die("connection cont be made");
mysql_select_db("trail", $my_connection) or die("cant select db");
if(isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "SELECT * FROM  `rooms` where r_id=$id ";
    $result = mysql_query($query, $my_connection) or die(mysql_error());
}
$row = mysql_fetch_array($result);
if (isset($_SESSION['auth123'])) //if(true)
{
    if (isset($_POST['Submit'])) {
        $room_types = $_POST['roomtype'];
        $room_price = $_POST['roomprice'];
        $no_rooms = $_POST['nroom'];
        $ac = $_POST['ac'];
        $gyser = $_POST['gyser'];
        $western = $_POST['western'];
        $beds = $_POST['beds'];
//        if (empty($_GET['id'])) {
//        $query = "INSERT INTO rooms SET room_types ='$room_types',room_price = '$room_price',no_rooms = '$no_rooms',ac = '$ac',gyser = '$gyser', western = '$western',Beds='$beds'";
//        $result1 = mysqli_query($my_connection, $query);
//        $_SESSION['msg'] = "Your Data inserted Successfully";
//            header('location:index.php');
//        }
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
//            $query = "UPDATE  rooms SET room_types ='$room_types',room_price = '$room_price',no_rooms = '$no_rooms',ac = '$ac',gyser = '$gyser', western = '$western',Beds='$beds' WHERE r_id='$id' ";
            $query = "UPDATE `rooms` SET `room_types` = '$room_types', `room_price` = '$room_price', `no_rooms` = '$no_rooms', `ac` = '$ac', `gyser` = '$gyser', `Western` = '$western', `Beds` = '$beds' location='mamandur' WHERE `rooms`.`r_id` = $id " ;
//            echo $query ;
            $result1 = mysql_query($query, $my_connection) or die(mysql_error());
            $_SESSION['msg'] = "Your Data Updated Successfully";
            header('location:talakonaroomupdate.php');
//        }
        }
//    if (!empty($_GET['id'])) {
//        $id = $_GET['id'];
//        $query = "SELECT * FROM users  where ID = '$id' ";
//        $queryrun = mysqli_query($conn, $query);
//        $row = mysqli_fetch_array($queryrun);
////$skill=explode(",",$row['Skill']);
//        $skill = $row['Skill'];
    }


    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>talakona room bokings</title>
        <link rel="stylesheet" href="css/app.v1.css">
        <link rel="stylesheet" href="css/font.css" cache="false">
        <!--[if lt IE 9]>
        <script src="js/ie/respond.min.js" cache="false"></script>
        <script src="js/ie/html5.js" cache="false"></script>
        <script src="js/ie/fix.js" cache="false"></script> <![endif]-->
        <style type="text/css" title="currentStyle">

            @import "jquery.dataTables.css";
        </style>
    </head>
    <body>
    <section class="hbox stretch">
        <aside class="bg-primary aside-sm" id="nav">
            <section class="vbox">
                <header class="dker nav-bar">
                    <a href="#" class="nav-brand" data-toggle="fullscreen">Admin</a> <a
                        class="btn btn-link visible-xs"
                        data-toggle="class:show"
                        data-target=".nav-user"> <i
                            class="icon-comment-alt"></i> </a></header>
                <footer class="footer b-r bg-gradient hidden-xs"><a href="logout.php"
                                                                    class="btn btn-sm btn-link m-r-n-xs pull-right">
                        <i
                            class="icon-off"></i> </a> <a href="#nav" data-toggle="class:nav-vertical"
                                                          class="btn btn-sm btn-link m-l-n-sm"> <i
                            class="icon-reorder"></i> </a></footer>
                <section>
                    <div class="bg-success nav-user hidden-xs pos-rlt">
                        <div class="nav-avatar pos-rlt"><a href="#" class="thumb-sm avatar animated rollIn"
                                                           data-toggle="dropdown"> <i class="icon-user"></i> <span
                                    class="caret caret-white"></span> </a>
                            <ul class="dropdown-menu m-t-sm animated fadeInLeft"><span class="arrow top"></span>
                                <li class="divider"></li>
                                <li><a href="docs.html">Help</a></li>
                                <li><a href="signin.html">Logout</a></li>
                            </ul>
                            <div class="visible-xs m-t m-b"><a href="#" class="h3">John.Smith</a>
                                <p><i class="icon-map-marker"></i> London, UK</p></div>
                        </div>
                        <div class="nav-msg"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> <b
                                    class="badge badge-white count-n">2</b> </a>
                            <section class="dropdown-menu m-l-sm pull-left animated fadeInRight">
                                <div class="arrow left"></div>
                                <section class="panel bg-white">
                                    <header class="panel-heading"><strong>You have <span class="count-n">2</span>
                                            notifications</strong></header>
                                    <div class="list-group"><a href="#" class="media list-group-item"> <span
                                                class="pull-left thumb-sm"> <i class="icon-user"
                                                                               class="img-circle"></i> </span>
                                        </a>
                                    </div>
                                </section>
                            </section>
                        </div>
                    </div>
                    <nav class="nav-primary hidden-xs">
                        <ul class="nav">
                            <li><a href="index.php"> <i class="icon-eye-open"></i> <span>Over view</span> </a></li>
                            <li class="dropdown-submenu active"><a href="#" class="dropdown-toggle"
                                                                   data-toggle="dropdown"> <i
                                        class="icon-suitcase"></i>
                                    <span>Bookings</span> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="talakonabook.php">Talakona</a></li>
                                    <li><a href="mamandurbook.php"> <b class="badge pull-right">30</b>Mamandur </a>
                                    <li><a href="roomdetails.php">Room Details</a></li>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu" class="active">

                                <a class="dropdown-toggle" "data-toggle="dropdown" href="contactsnotif.php">
                                <i class="icon-envelope-alt"></i>
                                <span>Notif </span>
                                </a>
                            </li>
                            <li class="dropdown-submenu">

                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="icon-inr"></i>
                                    <span>Revenue </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="talakona-revenue.php"> Talakona </a>
                                    </li>
                                    <li><a href="mamandur-revenue.php"> Mamandur </a></li>
                                    <li>
                                        <a href="#"> Papavinasanam </a>
                                    </li>
                                </ul>
                            <li class="dropdown-submenu">

                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="icon-stackexchange"></i>
                                    <span>Expenditure </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#"> Talakona </a>
                                    </li>
                                    <li><a href="#"> Mamandur </a></li>
                                    <li>
                                        <a href="#"> Papavinasanam </a>
                                    </li>
                                </ul>
                            <li class="dropdown-submenu">

                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="icon-calendar"></i>
                                    <span>Calander</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#"> Talakona </a>
                                    </li>
                                    <li><a href="#"> Mamandur </a></li>
                                    <li>
                                        <a href="#"> Papavinasanam </a>
                                    </li>
                                </ul>

                            </li>
                    </nav>
                </section>
            </section>
        </aside> <!-- /.aside --> <!-- .vbox -->

        <section id="content">
            <section class="vbox">
                <header class="header bg-success bg-gradient">
                    <div class="btn-group">
                        <button type="button" onclick="location.href='mamandurbook.php'" class="btn btn-info trigger">mamandur room bookings</button>

                    </div>
                    <div class="btn-group">
                        <button type="button" onclick="location.href='roomdetails.php'"
                                class="btn btn-info trigger">room updating
                        </button>

                    </div>
                </header>
                <form method="POST" enctype="multipart/form-data">
                    <section class="scrollable wrapper" style="
    overflow: auto;
">
                        <table cellpadding="0" cellspacing="0" border="0" class="display" id="all" width="100%">
                            <thead>
                            <tr>
                                <!--                                    <th>SNO</th>-->
                                <th>ROOM Type</th>
                                <th>NO OF ROOMS</th>
                                <th>A/C</th>
                                <th>GEYSER</th>
                                <th>WESTERN</th>
                                <th>NO OF BEDS</th>
                                <th>PRICE</th>

                            </tr>
                            </thead>
                            <tbody id="alltbody">

                            <tr>
                                <!--                                    <td><input type="text" value="--><?php //echo $row['r_id']; ?><!--"/></td>-->
                                <td><input type="text" value="<?php echo $row['room_types']; ?>" name="roomtype"/></td>
                                <td><input type="text" value="<?php echo $row['no_rooms']; ?>" name="nroom"/></td>
                                <td>
                                    <!--                                        <label for="AC">AC</label>-->
                                    <select id="AC" name="ac">
                                        <option  value="YES" selected="<?php if( $row['ac']=='YES') echo "selected"?>">YES</option>
                                        <option value="NO" selected="<?php if( $row['ac']=='NO') echo "selected"?>">NO</option>
                                    </select></td>
                                <td>
                                    <select id="AC" name="gyser">
                                        <option  value="YES" selected="<?php if( $row['gyser']=='YES') echo "selected"?>">YES</option>
                                        <option value="NO" selected="<?php if( $row['gyser']=='NO') echo "selected"?>">NO</option>
                                    </select>
                                    <!--                                        <input type="text" value="--><?php //echo $row['gyser']; ?><!--" name="gyser"/>-->
                                </td>
                                <td>
                                    <select id="AC" name="western">
                                        <option  value="YES" selected="<?php if( $row['Western']=='YES') echo "selected"?>">YES</option>
                                        <option value="NO" selected="<?php if( $row['Western']=='NO') echo "selected"?>">NO</option>
                                    </select>
                                    <!--                                        <input type="text" value="--><?php //echo $row['Western']; ?><!--" name="western"/>-->
                                </td>

                                <td><input type="text" value="<?php echo $row['Beds']; ?>" name="beds"/></td>
                                <td><input type="text" value="<?php echo $row['room_price']; ?>" name="roomprice"/>
                                </td>

                                <td><input type="submit" name="Submit" value="Submit"/></td>
                            </tr>
                            <?php

                            ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <!--                                    <th>SNO</th>-->
                                <th>ROOM Type</th>
                                <th>NO OF ROOMS</th>
                                <th>A/C</th>
                                <th>GEYSER</th>
                                <th>WESTERN</th>
                                <th>NO OF BEDS</th>
                                <th>PRICE</th>

                            </tr>
                            </tfoot>
                        </table>
                    </section>
                </form>
            </section>
        </section>


    </section>

    <script src="css/app.v1.js"></script>


    </script>
    <
    script
    type = "text/javascript"
    language = "javascript"
    src = "jquery.dataTables.js" ></script>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function () {
            $('#all').dataTable(
                {
                    "aaSorting": []

                }
            );
        });
    </script>

    </body>
    </html>

    <?php
//    }
} else {
    header("Location: usage.html");
    echo "please login <a href='usage.html'> here</a>";
}

?>
