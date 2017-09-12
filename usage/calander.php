<!DOCTYPE html><html lang="en"><head> <meta charset="utf-8"> <title>Web Application | todo</title> <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav"> <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> <link rel="stylesheet" href="css/app.v1.css"> <link rel="stylesheet" href="css/font.css" cache="false"> <!--[if lt IE 9]> <script src="js/ie/respond.min.js" cache="false"></script> <script src="js/ie/html5.js" cache="false"></script> <script src="js/ie/fix.js" cache="false"></script> <![endif]-->

<style type="text/css" title="currentStyle">

			

			@import "jquery.dataTables.css";

		</style>

</head><body> 

<section class="hbox stretch"> 

<aside class="bg-primary aside-sm" id="nav"> 

<section class="vbox"> 

<header class="dker nav-bar"> 

<a href="#" class="nav-brand" data-toggle="fullscreen">Admin</a> <a class="btn btn-link visible-xs" data-toggle="class:show" data-target=".nav-user"> <i class="icon-comment-alt"></i> </a> </header> <footer class="footer b-r bg-gradient hidden-xs"> <a href="logout.php"  class="btn btn-sm btn-link m-r-n-xs pull-right"> <i class="icon-off"></i> </a> <a href="#nav" data-toggle="class:nav-vertical" class="btn btn-sm btn-link m-l-n-sm"> <i class="icon-reorder"></i> </a> </footer> <section> <div class="bg-success nav-user hidden-xs pos-rlt"> <div class="nav-avatar pos-rlt"> <a href="#" class="thumb-sm avatar animated rollIn" data-toggle="dropdown"> <i class="icon-user"></i> <span class="caret caret-white"></span> </a> <ul class="dropdown-menu m-t-sm animated fadeInLeft"> <span class="arrow top"></span>  <li class="divider"></li> <li> <a href="docs.html">Help</a> </li> <li> <a href="signin.html">Logout</a> </li> </ul> <div class="visible-xs m-t m-b"> <a href="#" class="h3">John.Smith</a> <p><i class="icon-map-marker"></i> London, UK</p> </div> </div> <div class="nav-msg"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <b class="badge badge-white count-n">2</b> </a> <section class="dropdown-menu m-l-sm pull-left animated fadeInRight"> <div class="arrow left"></div> <section class="panel bg-white"> <header class="panel-heading"> <strong>You have <span class="count-n">2</span> notifications</strong> </header> <div class="list-group"> <a href="#" class="media list-group-item"> <span class="pull-left thumb-sm"> <i class="icon-user" class="img-circle"></i> </span> <span class="media-body block m-b-none"> Use awesome animate.css<br> <small class="text-muted">28 Aug 13</small> </span> </a> <a href="#" class="media list-group-item"> <span class="media-body block m-b-none"> 1.0 initial released<br> <small class="text-muted">27 Aug 13</small> </span> </a> </div> <footer class="panel-footer text-sm"> <a href="#" class="pull-right"><i class="icon-cog"></i></a> <a href="#">See all the notifications</a> </footer> </section> </section> </div> </div> <nav class="nav-primary hidden-xs"> <ul class="nav"> <li> <a href="index.php"> <i class="icon-eye-open"></i> <span>Over view</span> </a> </li> 

	<li class="dropdown-submenu active"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-suitcase"></i> <span>Bookings</span> </a> <ul class="dropdown-menu"> <li> <a href="talakonabook.php">Talakona</a> </li> <li> <a href="mamandurbook.php"> <b class="badge pull-right">30</b>Mamandur </a> </li>  </ul> </li> 

    <li class="dropdown-submenu" class="active">



    <a class="dropdown-toggle"  "data-toggle="dropdown" href="contactsnotif.php">

        <i class="icon-envelope-alt"></i>

        <span>Notif </span>

    </a>

    

    <li class="dropdown-submenu">



    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="icon-inr"></i>
        <span>Revenue </span>
    </a>
    <ul class="dropdown-menu">
        <li>
            <a href="talakona-revenue.php"> Talakona </a>
        </li>
        <li><a href="mamandur-revenue.php"> Mamandur </a> </li>
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

        <li><a href="#"> Mamandur </a> </li>

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

        <li><a href="#"> Mamandur </a> </li>

        <li>

            <a href="#"> Papavinasanam </a>

        </li>

    </ul>



</li>  </nav> </section> </section> </aside> <!-- /.aside --> <!-- .vbox --> 



 <section id="content">

	 <section class="vbox">

		<header class="header bg-success bg-gradient">

			<div class="btn-group">

				 <button type="button" class="btn btn-info trigger">Talakona room bookings</button> 

				 

			</div>

		</header>

		

		<section class="scrollable wrapper">

			<div id="calendar" class="calendar fc fc-ltr">

				

			</div>



		</section>

		

	 </section>





</section>

  

<script src="css/app.v1.js"></script>



 

</script>

<script type="text/javascript" language="javascript" src="jquery.dataTables.js"></script>

<script type="text/javascript" charset="utf-8">

	$(document).ready(function() {

		

		

	} );

</script>

		

  </body></html>