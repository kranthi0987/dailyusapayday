<?php
/**
 * Created by PhpStorm.
 * User: krant
 * Date: 9/10/2017
 * Time: 11:27 PM
 */

error_reporting(0);
session_start();
if (isset($_SESSION['auth123'])) //if(true)
{
    ?>
    <?php
    //echo "notifications";
    include("config.php");
    $my_connection = mysql_connect($db_host, $db_user, $db_pass) or die("connection cont be made");
    mysql_select_db("trail", $my_connection) or die("cant select db");
    $query = "select * from contact_table order by c_id desc  limit 0,40";
    $result = mysql_query($query, $my_connection) or die(mysql_error());
    $num = mysql_numrows($result);
    $i = 0;
    if (isset($_POST['submit'])) {
        $room_types = $_POST['room_types'];
        $room_price = $_POST['room_price'];
        $no_rooms = $_POST['no_rooms'];
        $ac = $_POST['ac'];
        $gyser = $_POST['gyser'];
        $western = $_POST['western'];
        $beds = $_POST['Beds'];
        $location = $_POST['location'];
        if (isset($_POST['submit'])) {
            $query = "INSERT INTO rooms SET room_types ='$room_types',room_price = '$room_price',no_rooms = '$no_rooms',ac = '$ac',gyser = '$gyser', western = '$western',Beds='$beds',location='$location'";
//           echo $query;
            $result1 = mysql_query($query, $my_connection) or die(mysql_error());
            $_SESSION['msg'] = "Your Data inserted Successfully";
            header('location:roomdetails.php');
        }
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>CBET usage</title>
        <link rel="stylesheet" href="css/app.v1.css">
        <link rel="stylesheet" href="css/font.css" cache="false">
        <!--[if lt IE 9]>
        <script src="js/ie/respond.min.js" cache="false"></script>
        <script src="js/ie/html5.js" cache="false"></script>
        <script src="js/ie/fix.js" cache="false"></script> <![endif]-->
    </head>

    <body>
    <section class="hbox stretch">
        <aside class="bg-primary aside-sm" id="nav">
            <section class="vbox">
                <header class="dker nav-bar"><a href="#" class="nav-brand" data-toggle="fullscreen">Admin</a>
                    <a class="btn btn-link visible-xs" data-toggle="class:show" data-target=".nav-user"> <i
                                class="icon-comment-alt"></i> </a>
                </header>
                <footer class="footer b-r bg-gradient hidden-xs">
                    <a href="logout.php" class="btn btn-sm btn-link m-r-n-xs pull-right"> <i class="icon-off"></i>
                    </a>
                    <a href="#nav" data-toggle="class:nav-vertical" class="btn btn-sm btn-link m-l-n-sm"> <i
                                class="icon-reorder"></i> </a>
                </footer>
                <section>
                    <div class="bg-success nav-user hidden-xs pos-rlt">
                        <div class="nav-avatar pos-rlt">
                            <a href="#" class="thumb-sm avatar animated rollIn" data-toggle="dropdown"> <img
                                        src="images/avatar_default.jpg" class="img-circle"> <span
                                        class="caret caret-white"></span> </a>
                            <ul class="dropdown-menu m-t-sm animated fadeInLeft"><span class="arrow top"></span>
                                <li class="divider"></li>
                                <li><a href="docs.html">Help</a></li>
                                <li><a href="signin.html">Logout</a></li>
                            </ul>
                            <div class="visible-xs m-t m-b"><a href="#" class="h3">John.Smith</a>
                                <p><i class="icon-map-marker"></i> London, UK</p>
                            </div>
                        </div>
                        <div class="nav-msg">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <b
                                        class="badge badge-white count-n">2</b> </a>
                            <section class="dropdown-menu m-l-sm pull-left animated fadeInRight">
                                <div class="arrow left"></div>
                                <section class="panel bg-white">
                                    <header class="panel-heading"><strong>You have <span class="count-n">2</span>
                                            notifications</strong></header>
                                    <div class="list-group">
                                        <a href="#" class="media list-group-item"> <span class="pull-left thumb-sm"> <i
                                                        class="icon-user" class="img-circle"></i> </span> <span
                                                    class="media-body block m-b-none"> Use awesome animate.css<br> <small
                                                        class="text-muted">28 Aug 13</small> </span> </a>
                                        <a href="#" class="media list-group-item"> <span
                                                    class="media-body block m-b-none"> 1.0 initial released<br> <small
                                                        class="text-muted">27 Aug 13</small> </span> </a>
                                    </div>
                                    <footer class="panel-footer text-sm"><a href="#" class="pull-right"><i
                                                    class="icon-cog"></i></a> <a href="#">See all the
                                            notifications</a>
                                    </footer>
                                </section>
                            </section>
                        </div>
                    </div>
                    <nav class="nav-primary hidden-xs">
                        <ul class="nav">
                            <li class="active">
                                <a href="index.php"> <i class="icon-eye-open"></i> <span>Over view</span> </a>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i
                                            class="icon-suitcase"></i> <span>Bookings</span> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="talakonabook.php">Talakona</a></li>
                                    <li>
                                        <a href="mamandurbook.php"> <b class="badge pull-right">30</b>Mamandur </a>
                                    </li>
                                    <li><a href="roomdetails.php">Room Details</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="contactsnotif.php"> <i class="icon-envelope-alt"></i> <span>Notif </span>
                                </a>
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="icon-inr"></i>
                                    <span>Revenue </span> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="talakona-revenue.php"> Talakona </a></li>
                                    <li><a href="mamandur-revenue.php"> Mamandur </a></li>
                                    <li><a href="#"> Papavinasanam </a></li>
                                </ul>
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i
                                            class="icon-stackexchange"></i> <span>Expenditure </span> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"> Talakona </a></li>
                                    <li><a href="#"> Mamandur </a></li>
                                    <li><a href="#"> Papavinasanam </a></li>
                                </ul>
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i
                                            class="icon-calendar"></i> <span>Calander</span> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"> Talakona </a></li>
                                    <li><a href="#"> Mamandur </a></li>
                                    <li><a href="#"> Papavinasanam </a></li>
                                </ul>
                            </li>
                    </nav>
                </section>
            </section>
        </aside>
        <!-- /.aside -->
        <!-- .vbox -->
        <section id="content">
            <section class="vbox">
                <header class="header bg-white b-b">
                    <p>Welcome Prudhvi Raj</p>
                </header>
                <form method="post" action="" style="padding-left: 5%;">

                    <h1>Room adding</h1>

                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-lg-4">
                            <label for="room_types">ROOM TYPE</label>
                            <input name="room_types" required class="form-control" type="text">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-lg-4">
                            <label for="room_price">ROOM PRICE</label>
                            <input type="number" name="room_price" required class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-lg-4">
                            <label for="no_rooms">NO OF ROOMS</label>
                            <input type="number" name="no_rooms" required class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-lg-4">
                            <label for="ac">A/C</label>
                            <select class="form-control" id="ac" name="ac">
                                <option name="ac" value="YES">YES</option>
                                <option name="ac" value="NO">NO</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-lg-4">
                            <label for="gyser">GYSER</label>
                            <select class="form-control" id="gyser" name="gyser">
                                <option name="gyser" value="YES">YES</option>
                                <option name="gyser" value="NO">NO</option>
                            </select>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-lg-4">
                            <label for="western">WESTERN</label>
                            <select class="form-control" id="western" name="western">
                                <option name="western" value="YES">YES</option>
                                <option name="western" value="NO">NO</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-lg-4">
                            <label for="location">LOCATION</label>
                            <select class="form-control" id="location" name="location">
                                <option name="location" value="talakona">Talakona</option>
                                <option name="location" value="mamandur">Mamandur</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-lg-4">
                            <label for="Beds">BEDS</label>
                            <input type="number" name="Beds" required class="form-control">
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                <button type="submit" class="btn btn-default regbutton" name="submit"
                                        value="addroom">submit
                                </button>
                            </div>

                </form>

            </section>
            <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="body"></a>
        </section>
        <!-- /.vbox -->
    </section>
    <script src="css/app.v1.js"></script>
    <!-- Bootstrap -->
    <!-- App -->
    <!-- fuelux -->
    <!-- datatables -->
    <!-- Sparkline Chart -->
    <!-- Easy Pie Chart -->
    </body>

    </html>
    <?php

} else {
    header("Location: usage.html");
    echo "please login <a href='usage.html'> here</a>";
}

?>