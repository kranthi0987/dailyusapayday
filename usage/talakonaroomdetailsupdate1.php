<?php
 header('Access-Control-Allow-Origin: *');
//echo $_GET["month"];
	extract($_POST);
	include("config.php");
	$my_connection = mysql_connect($db_host , $db_user , $db_pass) or die("connection cont be made");
	mysql_select_db("trail",$my_connection) or die("cant select db");
	
	if(isset($_GET["id"])){
		$id = $_GET["id"];
		$rtype = $_POST["rtype"];
		$norooms = $_GET["nrooms"];
		$ac = $_GET["ac"];
		$gyser = $_GET["gyser"];
		$western = $_GET["western"];
		$beds = $_GET["beds"];
		$price = $_GET["price"];
		$query="update rooms set room_types='$rtype', no_rooms='$norooms', ac='$ac', gyser='$gyser', Western='$western', Beds='$beds', room_price='$price' where r_id='$id';";
		
		 mysql_query( $query , $my_connection) or die(mysql_error());
	}
	header("Location:http://localhost/seshachala/usage/talakonaroomupdate.php");
//	header("Location: http://seshachalavanadarshani.com/usage/talakonabook.php");
	exit;
	
?>