<?php
/**
 * Created by PhpStorm.
 * User: krant
 * Date: 9/11/2017
 * Time: 12:19 AM
 */
 header('Access-Control-Allow-Origin: *');
//echo $_GET["month"];

	include("config.php");
	$my_connection = mysql_connect($db_host , $db_user , $db_pass) or die("connection cont be made");
	mysql_select_db("trail",$my_connection) or die("cant select db");

	if(isset($_GET["id"])){
        $id = $_GET["id"];
        $query="DELETE   FROM  `rooms` WHERE r_id = $id; ";

        mysql_query( $query , $my_connection) or die(mysql_error());
    }

	header("Location: mamandurroomupdate.php");
	exit;

?>