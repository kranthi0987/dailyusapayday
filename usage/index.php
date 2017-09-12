<?php
error_reporting(0);
session_start();
if (isset($_SESSION['auth123'])) //if(true)
{
    ?>
    <?php
    //echo "notifications";
    include("config.php");
    $my_connection = mysql_connect($db_host, $db_user, $db_pass) or die("connection cont be made");
    mysql_select_db("dailyusapayday", $my_connection) or die("cant select db");
    // $query = "select * from contact_table order by c_id desc  limit 0,40";
    //$result = mysql_query($query, $my_connection) or die(mysql_error());
    //$num = mysql_numrows($result);
    //$i = 0;
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Daily usa pay day</title>
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
                <header class="dker nav-bar"><a href="#" class="nav-brand" data-toggle="fullscreen">Admin-Panel</a>
                    <a class="btn btn-link visible-xs" data-toggle="class:show" data-target=".nav-user"> <i
                                class="icon-comment-alt"></i></a>
                </header>
                <footer class="footer b-r bg-gradient hidden-xs">
                    <a href="logout.php" class="btn btn-sm btn-link m-r-n-xs pull-right"> <i class="icon-off"></i> </a>
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
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                        <div class="nav-msg">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <b
                                        class="badge badge-white count-n">2</b> </a>
                            <section class="dropdown-menu m-l-sm pull-left animated fadeInRight">
                                <div class="arrow left"></div>
                                <section class="panel bg-white">
                                    <header class="panel-heading"><strong>You have <span class="count-n">2</span>notifications</strong>
                                    </header>
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
                                                    class="icon-cog"></i></a> <a href="#">See all the notifications</a>
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
                                <a href="contactsnotif.php"> <i class="icon-envelope-alt"></i> <span>Notif </span> </a>
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="icon-inr"></i>
                                    <span>Revenue </span> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="talakona-revenue.php"> Talakona </a></li>
                                    <li><a href="mamandur-revenue.php"> Mamandur </a></li>
                                </ul>
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i
                                            class="icon-stackexchange"></i> <span>Expenditure </span> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"> Talakona </a></li>
                                    <li><a href="#"> Mamandur </a></li>
                                    <li><a href="#"> Papavinasanam </a></li>
                                </ul>
                    </nav>
                </section>
            </section>
        </aside>
        <section id="content">
            <section class="vbox">
                <header class="header bg-white b-b">
                    <p>Welcome Admin</p>
                </header>
                <section id="content">
                    <section class="vbox">
                        <header class="header bg-success bg-gradient">
                            <div class="btn-group">
                                <button type="button" class="btn btn-info trigger">Mamandur booking details</button>

                            </div>
                        </header>
                        <section class="scrollable wrapper">
                            <table cellpadding="0" cellspacing="0" border="0" class="display" id="all" width="100%">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Room</th>
                                    <th>For</th>
                                    <th>On</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>People</th>
                                    <th>Address</th>
                                    <th>Cancel</th>
                                </tr>
                                </thead>
                                <tbody id="alltbody">
                                <?php
                                error_reporting(0);
                                //echo "notifications";
                                include("config.php");
                                $my_connection = mysql_connect($db_host, $db_user, $db_pass) or die("connection cont be made");
                                mysql_select_db("trail", $my_connection) or die("cant select db");
                                $query = "SELECT * FROM  `mamandur_bookings` ORDER BY STR_TO_DATE( booked_on,  '%d/%m/%Y %h:%i:%s' ) DESC LIMIT 0 , 500";
                                $result = mysql_query($query, $my_connection) or die(mysql_error());
                                $i = 0;
                                ?>
                                <?php
                                while ($row = mysql_fetch_array($result)) {
                                    $i++;
                                    ?>
                                    <tr>
                                        <td><?php echo $row['mb_id']; ?></td>
                                        <td><?php echo $row['room_name']; ?></td>
                                        <td><?php echo $row['booked_on']; ?></td>
                                        <td><?php echo $row['registered_on']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['mobile']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['no_of_people']; ?></td>
                                        <td><?php echo $row['address']; ?></td>
                                        <td><?php echo "<a href='mamandurbookcancel.php?id=" . $row['tb_id'] . "' onClick=\"return confirm('Are You Sure ?');\" >Cancel</a>"; ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Room</th>
                                    <th>For</th>
                                    <th>On</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>People</th>
                                    <th>Address</th>
                                </tr>
                                </tfoot>
                            </table>
                        </section>
                    </section>
                </section>
            </section>
            <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="body"></a>
        </section>
    </section>
    <script src="css/app.v1.js"></script>
    </body>
    </html>
    <?php
} else {
    header("Location: usage.html");
    echo "please login <a href='usage.html'> here</a>";
}
?>