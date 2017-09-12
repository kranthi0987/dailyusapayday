<?php
				error_reporting(0);
				//echo "notifications";
										
				include("config.php");
				$my_connection = mysql_connect($db_host , $db_user , $db_pass) or die("connection cont be made");
				mysql_select_db("trail",$my_connection) or die("cant select db");
				
				
				$query ="select * from contact_table order by c_id desc  limit 0,40";
				$result = mysql_query( $query , $my_connection) or die(mysql_error());
				$num=mysql_numrows($result);
				$i=0;
					
?>

<!DOCTYPE html><html lang="en"><head> <meta charset="utf-8"> <title>CBET</title> <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav"> <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> <link rel="stylesheet" href="css/app.v1.css"> <link rel="stylesheet" href="css/font.css" cache="false"> <!--[if lt IE 9]> <script src="js/ie/respond.min.js" cache="false"></script> <script src="js/ie/html5.js" cache="false"></script> <script src="js/ie/fix.js" cache="false"></script> <![endif]--></head><body> 


<section class="hbox stretch"> 
<aside class="bg-primary aside-sm" id="nav"> 
<section class="vbox"> 
<header class="dker nav-bar"> 
<a href="#" class="nav-brand" data-toggle="fullscreen">Admin</a> <a class="btn btn-link visible-xs" data-toggle="class:show" data-target=".nav-user"> <i class="icon-comment-alt"></i> </a> </header> <footer class="footer b-r bg-gradient hidden-xs"> <a href="logout.php"  class="btn btn-sm btn-link m-r-n-xs pull-right"> <i class="icon-off"></i> </a> <a href="#nav" data-toggle="class:nav-vertical" class="btn btn-sm btn-link m-l-n-sm"> <i class="icon-reorder"></i> </a> </footer> <section> <div class="bg-success nav-user hidden-xs pos-rlt"> <div class="nav-avatar pos-rlt"> <a href="#" class="thumb-sm avatar animated rollIn" data-toggle="dropdown"> <i class="icon-user"></i> <span class="caret caret-white"></span> </a> <ul class="dropdown-menu m-t-sm animated fadeInLeft"> <span class="arrow top"></span>  <li class="divider"></li> <li> <a href="docs.html">Help</a> </li> <li> <a href="signin.html">Logout</a> </li> </ul> <div class="visible-xs m-t m-b"> <a href="#" class="h3">John.Smith</a> <p><i class="icon-map-marker"></i> London, UK</p> </div> </div> <div class="nav-msg"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <b class="badge badge-white count-n">2</b> </a> <section class="dropdown-menu m-l-sm pull-left animated fadeInRight"> <div class="arrow left"></div> <section class="panel bg-white"> <header class="panel-heading"> <strong>You have <span class="count-n">2</span> notifications</strong> </header> <div class="list-group"> <a href="#" class="media list-group-item"> <span class="pull-left thumb-sm"> <i class="icon-user" class="img-circle"></i> </span> <span class="media-body block m-b-none"> Use awesome animate.css<br> <small class="text-muted">28 Aug 13</small> </span> </a> <a href="#" class="media list-group-item"> <span class="media-body block m-b-none"> 1.0 initial released<br> <small class="text-muted">27 Aug 13</small> </span> </a> </div> <footer class="panel-footer text-sm"> <a href="#" class="pull-right"><i class="icon-cog"></i></a> <a href="#">See all the notifications</a> </footer> </section> </section> </div> </div> <nav class="nav-primary hidden-xs"> <ul class="nav"> <li> <a href="index.html"> <i class="icon-eye-open"></i> <span>Over view</span> </a> </li> <li class="dropdown-submenu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-suitcase"></i> <span>Bookings</span> </a> <ul class="dropdown-menu"> <li> <a href="#">Talakona</a> </li> <li> <a href="icons.html"> <b class="badge pull-right">30</b>Mamandur </a> </li>  </ul> </li> 
    <li class="dropdown-submenu">

    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="icon-envelope-alt"></i>
        <span>Notif </span>
    </a>
    <ul class="dropdown-menu">
        <li>
            <a href="#"> Talakona </a>
        </li>
        <li><a href="#"> Mamandur </a> </li>
		</ul>
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

</li>  </nav> </section> </section> </aside> <!-- /.aside --> <!-- .vbox --> <section id="content"> <section class="vbox"> <header class="header bg-white b-b"> <p>Welcome Prudhvi Raj</p> </header> <section class="scrollable"> <section class="hbox stretch"> <aside class="aside-lg bg-light lter b-r"> <section class="vbox"> <section class="scrollable"> <div class="wrapper"> <div class="clearfix m-b"> <a href="#" class="pull-left thumb m-r"> <i class="icon-user" class="img-circle"></i> </a> <div class="clear"> <div class="h3 m-t-xs m-b-xs">Prudhvi</div> <small class="text-muted"><i class="icon-map-marker"></i> Cordinator, CBET</small> </div> </div> <div class="btn-group btn-group-justified m-b"> <a class="btn btn-success btn-rounded" data-toggle="button"> <span class="text">  Talakona </span> <span class="text-active"> <i class="icon-eye-open"></i>  </span> </a> <a class="btn btn-info btn-rounded"> <span class="text">  Mamandur </span> <span class="text-active"> <i class="icon-eye-open"></i>  </span>  </a> </div> <div> <small class="text-uc text-xs text-muted">Designation</small> <p>Community Coordinator</p> <small class="text-uc text-xs text-muted">Activities</small> <p><i class="icon-list-alt"></i>  Organise room booking activities in communities of Talakona and mamandur.<br /><i class="icon-file"></i> Handle's account's data for Papavinasanam, Talakona & Mamandur.</p> <div class="line"></div> <small class="text-uc text-xs text-muted">connection</small> <p class="m-t-sm"> <a href="twitter.com" class="btn btn-rounded btn-twitter btn-icon"><i class="icon-twitter"></i></a> <a href="Facebook.com" class="btn btn-rounded btn-facebook btn-icon"><i class="icon-facebook"></i></a> <a href="google.com" class="btn btn-rounded btn-gplus btn-icon"><i class="icon-google-plus"></i></a> </p> </div> </div> </section> </section> </aside> <aside class="bg-white"> <section class="vbox"> <header class="header bg-light bg-gradient"> <ul class="nav nav-tabs nav-white"> <li class="active"><a href="#contact" data-toggle="tab">Contact notification</a></li> <li class=""><a href="#events" data-toggle="tab">Events notification</a></li>  </ul> </header> <section class="scrollable"> <div class="tab-content"> <div class="tab-pane active" id="contact"> 

<ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border"> 

<?php

while($row = mysql_fetch_array($result)) {
					$i++;
?>
<li class="list-group-item"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right"><?php echo $row['time']; ?></small> <strong class="block"><?php echo $row['name']; ?> </strong> <small> <?php echo " ".$row['message'] . " " ;?> </i></small> </a> </li> 
<?php	
					}
			
					?>

</ul> 

</div> <div class="tab-pane" id="events"> <div class="text-center wrapper"> <i class="icon-spinner icon-spin icon-large"></i> </div> </div>  </div> </section>
 </section> </aside> <aside class="col-lg-4 b-l"> 
<section class="vbox"> 
<section class="scrollable"> 
<div class="wrapper"> 
 <section class="panel no-borders"> <header class="panel-heading bg-success lter"> <span class="pull-right">Last 7 days</span> <span class="h4">$540<br> <small class="text-muted">Collected from Talakona</small> </span> <div class="text-center padder m-b-n-sm m-t-sm"> <div class="sparkline" data-type="line" data-resize="true" data-height="65" data-width="100%" data-line-width="2" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="3" data-data="[400,210,200,325,250,460,345,250,250,250,400,380]"></div> <div class="sparkline inline" data-type="bar" data-height="45" data-bar-width="6" data-bar-spacing="10" data-bar-color="#92cf5c">9,9,11,10,11,10,12,10,9,10,11,9,8</div> </div> </header> <div class="panel-body"> <div> <span class="text-muted">Sales in June:</span> <span class="h3 block">$2500.00</span> </div> <div class="row m-t-sm"> <div class="col-xs-4"> <small class="text-muted block">From market</small> <span>$1500.00</span> </div> <div class="col-xs-4"> <small class="text-muted block">Referal</small> <span>$600.00</span> </div> <div class="col-xs-4"> <small class="text-muted block">Affiliate</small> <span>$400.00</span> </div> </div> </div> </section>
 <section class="panel no-borders"> <header class="panel-heading bg-success lter"> <span class="pull-right">Last 7 days</span> <span class="h4">$540<br> <small class="text-muted">Collected from Mamandur</small> </span> <div class="text-center padder m-b-n-sm m-t-sm"> <div class="sparkline" data-type="line" data-resize="true" data-height="65" data-width="100%" data-line-width="2" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="3" data-data="[400,210,200,325,250,460,345,250,250,250,400,380]"></div> <div class="sparkline inline" data-type="bar" data-height="45" data-bar-width="6" data-bar-spacing="10" data-bar-color="#92cf5c">9,9,11,10,11,10,12,10,9,10,11,9,8</div> </div> </header> <div class="panel-body"> <div> <span class="text-muted">Sales in June:</span> <span class="h3 block">$2500.00</span> </div> <div class="row m-t-sm"> <div class="col-xs-4"> <small class="text-muted block">From market</small> <span>$1500.00</span> </div> <div class="col-xs-4"> <small class="text-muted block">Referal</small> <span>$600.00</span> </div> <div class="col-xs-4"> <small class="text-muted block">Affiliate</small> <span>$400.00</span> </div> </div> </div> </section>
 <section class="panel no-borders"> <header class="panel-heading bg-success lter"> <span class="pull-right">Last 3 months</span> <span class="h4">$540<br> <small class="text-muted">collected from Papavinasanam</small> </span> <div class="text-center padder m-b-n-sm m-t-sm"> <div class="sparkline" data-type="line" data-resize="true" data-height="65" data-width="100%" data-line-width="2" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="3" data-data="[400,210,200,325,250,460,345,250,250,250,400,380]"></div> <div class="sparkline inline" data-type="bar" data-height="45" data-bar-width="6" data-bar-spacing="10" data-bar-color="#92cf5c">9,9,11,10,11,10,12,10,9,10,11,9,8</div> </div> </header> <div class="panel-body"> <div> <span class="text-muted">Sales in June:</span> <span class="h3 block">$2500.00</span> </div> <div class="row m-t-sm"> <div class="col-xs-4"> <small class="text-muted block">From market</small> <span>$1500.00</span> </div> <div class="col-xs-4"> <small class="text-muted block">Referal</small> <span>$600.00</span> </div> <div class="col-xs-4"> <small class="text-muted block">Affiliate</small> <span>$400.00</span> </div> </div> </div> </section>
 <section class="panel"> <div class="text-center wrapper"> <div class="sparkline inline" data-type="pie" data-height="150" data-slice-colors="['#acdb83','#fb6b5b']">25000,15000</div> </div> <ul class="list-group list-group-flush no-radius alt"> <li class="list-group-item"> <span class="pull-right">25,000</span> <span class="label bg-success">1</span> Talakona </li> <li class="list-group-item"> <span class="pull-right">23,200</span> <span class="label bg-danger">2</span> Mamandur </li>  </ul> </section> 
  
</section> </section> </aside> </section> </section> </section> <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="body"></a> </section> <!-- /.vbox --> </section><script src="css/app.v1.js"></script> <!-- Bootstrap --> <!-- App --> <!-- fuelux --> <!-- datatables --> <!-- Sparkline Chart --> <!-- Easy Pie Chart --> 


  </body></html>
