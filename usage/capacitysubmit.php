<?php  
	
	//echo $_GET["rid"];
	
	include("config.php");
	$my_connection = mysql_connect($db_host , $db_user , $db_pass) or die("connection cont be made");
	mysql_select_db("sheshsiu_amex",$my_connection) or die("cant select db");
	
	
	$rid = $_GET["rid"];
	for($x=1;$x<6;$x++)
	{
	$weektemp = $_POST['week'.$x];
	echo $_POST['week'.$x] ."<br>";
	//for name out
	$query1 ="INSERT INTO capacity(weekid,rid,total) VALUES($weektemp,'001','522');";
	//mysql_query( $query1 , $my_connection) or die(mysql_error());
	echo $query1;
	}
	echo $_POST["week1"] ."<br>";
	echo $_POST["week2"] ."<br>";
	echo $_POST["week3"] ."<br>";
	echo $_POST["week4"] ."<br>";
	echo $_POST["week5"] ."<br>";
	echo $_POST[""] ."<br>";
	echo $_POST["rid"] ."<br>";
	
	
?>