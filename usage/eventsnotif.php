<?php
error_reporting(0);
session_start();
if (isset($_SESSION['auth123'])) //if(true)
{
    ?>
    <?php
    error_reporting(0);
    //echo "notifications";

    include("config.php");
    $my_connection = mysql_connect($db_host, $db_user, $db_pass) or die("connection cont be made");
    mysql_select_db("trail", $my_connection) or die("cant select db");


    $query = "select * from activity order by a_id desc  limit 0,40";
    $result = mysql_query($query, $my_connection) or die(mysql_error());

    $i = 0;
    ?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>events notification</title>
        <link rel="stylesheet" href="css/app.v1.css">
        <link rel="stylesheet" href="css/font.css" cache="false">
        <!--[if lt IE 9]>
        <script src="js/ie/respond.min.js" cache="false"></script>
        <script src="js/ie/html5.js" cache="false"></script>
        <script src="js/ie/fix.js" cache="false"></script> <![endif]--></head>
    <body>
    <section class="hbox stretch">
        <aside class="bg-primary aside-sm" id="nav">
            <section class="vbox">
                <header class="dker nav-bar">
                    <a href="#" class="nav-brand" data-toggle="fullscreen">Admin</a> <a class="btn btn-link visible-xs"
                                                                                        data-toggle="class:show"
                                                                                        data-target=".nav-user"> <i
                                class="icon-comment-alt"></i> </a></header>
                <footer class="footer b-r bg-gradient hidden-xs"><a href="logout.php"
                                                                    class="btn btn-sm btn-link m-r-n-xs pull-right"> <i
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
                                                                                   class="img-circle"></i> </span> </a>
                                        <a href="#" class="media list-group-item"> <span
                                                    class="media-body block m-b-none"> 1.0 initial released<br> <small
                                                        class="text-muted">27 Aug 13</small> </span> </a></div>
                                </section>
                            </section>
                        </div>
                    </div>
                    <nav class="nav-primary hidden-xs">
                        <ul class="nav">
                            <li><a href="index.php"> <i class="icon-eye-open"></i> <span>Over view</span> </a></li>
                            <li class="dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i
                                            class="icon-suitcase"></i> <span>Bookings</span> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="talakonabook.php">Talakona</a></li>
                                    <li><a href="mamandurbook.php"> <b class="badge pull-right">30</b>Mamandur </a></li>
                                    <li><a href="roomdetails.php">Room Details</a></li>

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
            <section class="hbox stretch">
                <!-- .aside -->
                <aside class="aside">
                    <section class="vbox">
                        <header class="bg-primary dk header"><p class="h4">Notifications</p></header>
                        <section>
                            <section>
                                <section id="mail-nav" class="hidden-xs">
                                    <ul class="nav nav-pills nav-stacked no-radius">
                                        <li><a href="contactsnotif.php"> <i class="icon-envelope-alt"></i> contact </a>
                                        </li>
                                        <li class="active"><a href="eventsnotif.php"> <i
                                                        class="icon-bookmark-empty"></i> Events</a></li>
                                    </ul>
                                </section>
                            </section>
                        </section>
                    </section>
                </aside> <!-- /.aside --> <!-- .aside -->
                <aside class="bg-light lter">
                    <section class="vbox">
                        <header class="bg-primary header clearfix">
                            <div class="btn-toolbar">
                                <div class="btn-group select">
                                    <ul class="dropdown-menu text-left text-sm">
                                        <li><a href="#">Read</a></li>
                                        <li><a href="#">Unread</a></li>
                                        <li><a href="#">Starred</a></li>
                                        <li><a href="#">Unstarred</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button title="" data-original-title="" class="btn btn-sm btn-white"
                                            data-toggle="tooltip" data-placement="bottom" data-title="Refresh"><i
                                                class="icon-refresh"></i></button>
                                </div>
                            </div>
                        </header>
                        <footer class="footer b-t">
                            <form class="m-t-sm">
                                <div class="input-group"><input class="input-sm form-control input-s-sm"
                                                                placeholder="Search" type="text">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-white"><i class="icon-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </footer>
                        <section class="scrollable">
                            <ul class="list-group no-radius m-b-none m-t-n-xxs list-group-alt list-group-lg">
                                <?php

                                while ($row = mysql_fetch_array($result)) {
                                    $i++;
                                    ?>
                                    <li class="tokkalo list-group-item animated bounceInLeft"
                                        href="#email-content<?php echo $i; ?> " data-toggle="class:show"><a href="#"
                                                                                                            class="thumb-xs pull-left m-r-sm">
                                            <img src="images/avatar.jpg" class="img-circle"> </a> <a href="#"
                                                                                                     class="clear">
                                            <small class="pull-right"><?php echo $row['date']; ?></small>
                                            <strong><?php echo $row['name']; ?></strong>
                                            <span><?php echo " " . $row['message'] ?><span
                                                        class="text-danger">click me</span></span> </a></li>

                                    <?php
                                }

                                ?>
                            </ul>
                        </section>
                    </section>
                </aside> <!-- /.aside -->
                <?php
                $query = "select * from activity order by a_id desc  limit 0,40";
                $result = mysql_query($query, $my_connection) or die(mysql_error());

                $i = 0;
                while ($row = mysql_fetch_array($result)) {
                    $i++;
                    ?>

                    <!-- .aside -->
                    <aside class="humm bg-white hide col-lg-6 b-l" id="email-content<?php echo $i; ?>">
                        <section class="vbox">
                            <section class="scrollable">
                                <div class="text-sm padder m-t">
                                    <div class="block clearfix m-b"><a href="#" class="thumb-xs inline"><img
                                                    src="images/avatar.jpg" class="img-circle"></a> <span
                                                class="inline m-t-xs"><?php echo $row['name']; ?>
                                            &lt;<?php echo $row['email']; ?>&gt; to me</span>
                                        <div class="pull-right inline"> <?php echo $row['date']; ?>
                                            <div class="btn-group"></div>
                                        </div>
                                    </div>
                                    <div class="line pull-in"></div>
                                    <p><?php echo " " . $row['message'] ?></p>
                                    <blockquote><em><br><br><i class="icon-phone"></i><?php echo " " . $row['mobile'] ?>
                                        </em><em><br><br><i
                                                    class="icon-envelope-alt"></i> <?php echo " " . $row['email'] ?>
                                        </em></blockquote>
                                    <div class="show"></div>
                                </div>
                                </div> </div> </section>
                        </section>
                    </aside>

                    <?php
                }

                ?>
            </section>
        </section>

        <script src="css/app.v1.js"></script>

        <script>

        </script>
    </body>
    </html>

    <?php
} else {
    header("Location: usage.html");
    echo "please login <a href='usage.html'> here</a>";
}

?>
