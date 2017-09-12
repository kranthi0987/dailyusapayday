<?php
	error_reporting(0);
	include("config.php");
	$my_connection = mysql_connect($db_host , $db_user , $db_pass) or die("connection cont be made");
	mysql_select_db("dailyusapayday",$my_connection) or die("cant select db");
	session_start();
	if(isset($_SESSION['auth123']))
		{
						header ("Location: index.php");
						exit;
			?>
			<?php
		}
	else
		{
			$query = "select * from users  ";
			$result = mysql_query( $query , $my_connection) or die(mysql_error());
			$row = mysql_fetch_array($result);
			if($row['name'] == $_GET['name'] && $_GET['pass'] == $row['pass'])
				{
					$_SESSION['auth123']=1245862;
					header ("Location: index.php");
					exit ;
				}
			else
				{
					die("authentication failed");
				}
		}
?>