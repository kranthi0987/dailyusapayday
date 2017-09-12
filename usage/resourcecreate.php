<html>



<head>

<style>



table

{

border-collapse:collapse;

}

table, td, th

{

border:1px solid black;

}

th

{

background-color: #669900;

color:white;

}



</style>

</head>



<body>



	<center>

		<h2> Create Resource </h2> 

		<form  action="resourcecreate.php" method"get" id="project">

		<table>

			<tbody>

				<tr>

					<td><p>Name <p></td><td><input type="text" name="name"> </td>

				</tr>

				

				<tr>

				<td></td>

				<td><input type="submit" value="submit"> </td> 

				</tr>

			</tbody>

		</table>

		</form>

		

		<table>

			<thead>

			<tr>

			<td><h4>ID</h4></td>

			<td><h4>Name</h4></td>

			

			

			</tr>

			</thead>

			<tbody>

			<?php

				error_reporting(0);

				//echo "hai";						

				include("config.php");

				$my_connection = mysql_connect($db_host , $db_user , $db_pass) or die("connection cont be made");

				mysql_select_db("sheshsiu_amex",$my_connection) or die("cant select db");

				

				// get highest value in the table

				$query ="SELECT rid FROM resources ORDER BY rid DESC LIMIT 1";

				$ridresult = mysql_query( $query , $my_connection) or die(mysql_error());

				

				// insert

				if(isset($_GET["name"])	){

				$id=0;

				while ($row1 = mysql_fetch_array($ridresult)) {

					$id = $row1[0];

					$id++;

				}

				$name= $_GET['name'];

				$query ="INSERT INTO resources (rid, name) VALUES ( '$id','$name')";

				mysql_query( $query , $my_connection) or die(mysql_error());

				echo 'your employee updated';

				}

				else{

				

				echo 'list of resources';

				

				}

				// retrive

				$query ="select * from resources  limit 0,40";

				$result = mysql_query( $query , $my_connection) or die(mysql_error());

				$num=mysql_numrows($result);

				$i=0;

				

				while($row = mysql_fetch_array($result)) {

					$i++;

					

			?>

			<tr>

				<td><p><?php echo $row['rid'] ?><p></td><td><p><?php echo $row['name'] ?><p></td>

			</tr>

				

			<?php

				}

			

			?>

			

			</tbody>

		

	</center>

  </body>