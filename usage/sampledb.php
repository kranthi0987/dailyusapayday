



<?php



include("config.php");

$my_connection = mysql_connect($db_host, $db_user, $db_pass) or die("connection cont be made");

mysql_select_db("trail", $my_connection) or die ("can't select db");

//$query = "select * from contact_table order by c_id desc limit 0,40";



$query =  "select COLUMN_NAME from INFORMATION_SCHEMA.COLUMNS 

where TABLE_NAME = 'activity'";

$result = mysql_query($query , $my_connection) or die(mysql_error());

echo "<h4>activity</h4>";

while($row = mysql_fetch_array($result)){

	

	echo $row['COLUMN_NAME']."<br>";

	

}



$query =  "select COLUMN_NAME from INFORMATION_SCHEMA.COLUMNS 

where TABLE_NAME = 'contact_table'";

$result = mysql_query($query , $my_connection) or die(mysql_error());

echo "<h4>contact_table</h4>";

while($row = mysql_fetch_array($result)){

	

	echo $row['COLUMN_NAME']."<br>";

	

}



$query =  "select COLUMN_NAME from INFORMATION_SCHEMA.COLUMNS 

where TABLE_NAME = 'lgdetails'";

$result = mysql_query($query , $my_connection) or die(mysql_error());

echo "<h4>lgdetails</h4><br>";

while($row = mysql_fetch_array($result)){

	

	echo $row['COLUMN_NAME']."<br>";

	

}



$query =  "select COLUMN_NAME from INFORMATION_SCHEMA.COLUMNS 

where TABLE_NAME = 'mamandur_bookings'";

$result = mysql_query($query , $my_connection) or die(mysql_error());

echo "<h4>mamandur_bookings</h4>";

while($row = mysql_fetch_array($result)){

	

	echo $row['COLUMN_NAME']."<br>";

	

}



$query =  "select COLUMN_NAME from INFORMATION_SCHEMA.COLUMNS 

where TABLE_NAME = 'registered_mails'";

$result = mysql_query($query , $my_connection) or die(mysql_error());

echo "<h4>registered_mails</h4>";

while($row = mysql_fetch_array($result)){

	

	echo $row['COLUMN_NAME']."<br>";

	

}



$query =  "select COLUMN_NAME from INFORMATION_SCHEMA.COLUMNS 

where TABLE_NAME = 'talakona_bookings'";

$result = mysql_query($query , $my_connection) or die(mysql_error());

echo "<h4>talakona_bookings</h4>";

while($row = mysql_fetch_array($result)){

	

	echo $row['COLUMN_NAME']."<br>";

	

}



echo "<h4>all the tables </h4><br>";

$query =  "SELECT DISTINCT(TABLE_NAME) from INFORMATION_SCHEMA.COLUMNS";

$result = mysql_query($query , $my_connection) or die(mysql_error());



while($row = mysql_fetch_array($result)){

	

	echo $row['TABLE_NAME']."<br>";

	

}



?>