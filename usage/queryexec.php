<?php
	include("config.php");
				$my_connection = mysql_connect($db_host , $db_user , $db_pass) or die("connection cont be made");
				mysql_select_db("sheshsiu_amex",$my_connection) or die("cant select db");
				
				// get highest value in the table
				$query1 ="UPDATE projects
SET allocated = '0[]2'
WHERE pid = '0' ";
				$result1 = mysql_query( $query1 , $my_connection) or die(mysql_error());
								
?>