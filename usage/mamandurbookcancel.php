<?php
 header('Access-Control-Allow-Origin: *');
//echo $_GET["month"];
	
	include("config.php");
	$my_connection = mysql_connect($db_host , $db_user , $db_pass) or die("connection cont be made");
	mysql_select_db("trail",$my_connection) or die("cant select db");
	
	if(isset($_GET["id"])){
		$id = $_GET["id"];
	$query="DELETE   FROM  `mamandur_bookings` WHERE mb_id = $id; ";
		
		 mysql_query( $query , $my_connection) or die(mysql_error());
	}
	
	header("Location: http://seshachalavanadarshani.com/usage/mamandurbook.php");
	exit;
	
?>