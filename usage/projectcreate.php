<html>



<head>

<style>



table.main

{

border-collapse:collapse;

}

table.main tr td 

{

padding:5px;

border:1px solid black;

}



table.main tr th

{

padding:5px;

background-color: #669900;

color:white;

}



</style>

</head>



<body>



	<center>

		<h2> Create Project </h2> 

		<form  action="projectcreate.php" method"get" id="project">

		<table>

			<tbody>

				<tr>

					<td><p>Name <p></td><td><input type="text" name="name"> </td>

				</tr>

				<tr>

					<td><p>Description <p></td><td><textarea name="desc" form="project"></textarea></td>

				</tr>

				<tr>

				<td></td>

				<td><input type="submit" value="submit"> </td> 

				</tr>

			</tbody>

		</table>

		</form>

		

		<table class="main">

			<thead>

			<tr>

			<td><h4>ID</h4></td>

			<td><h4>Name</h4></td>

			<td><h4>Description</h4></td>

			<td><h4>Allocated</h4></td>

			

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

				$query ="SELECT pid FROM projects ORDER BY pid DESC LIMIT 1";

				$pidresult = mysql_query( $query , $my_connection) or die(mysql_error());

				

				// insert

				if(isset($_GET["name"])	){

					$id=0;

					while ($row1 = mysql_fetch_array($pidresult)) {

						$id = $row1[0];

						$id++;

					}

					$name= $_GET['name'];

					$desc = $_GET['desc'];

					$query ="INSERT INTO projects (pid, name, description) VALUES ( '	$id','$name','$desc')";

					mysql_query( $query , $my_connection) or die(mysql_error());

					echo 'your project updated';

				}

				else{

				

					echo 'list of projects';

				

				}

				// retrive

				$query ="select * from projects  limit 0,40";

				$result = mysql_query( $query , $my_connection) or die(mysql_error());

				$num=mysql_numrows($result);

				$i=0;

				

				while($row = mysql_fetch_array($result)) {

					$nameout ="";

					if(is_null($row['allocated']) == false)

					{

						$finalnames = "";

						$rawrid = $row['allocated'];

						$ridarray = explode("[]", $rawrid);

						//echo count($ridarray) . "<br>";

						for($xy = 0; $xy<count($ridarray) ;$xy++ )

						{

							//echo $ridarray[$xy] ." for " .$xy."<br>";

							$query1 ="select name from resources where rid ='$ridarray[$xy]'	 ";

							$result1 = mysql_query( $query1 , $my_connection) or die(mysql_error());

							//echo "started" . "<br>";

							while($row1 = mysql_fetch_array($result1)) {

								

								//echo $row1['name'] . "<br>";

								$nameout .=$row1['name'];

							}

						}

						

						

					}

			?>

			<tr>

				<td><p><?php echo $row['pid'] ?><p></td><td><p><?php echo $row['name'] ?><p></td><td><p><?php echo $row['description'] ?></p></td><td><p><?php echo  $nameout;  ?></p></td>

			</tr>

				

			<?php

				

				}

			

			?>

			

			</tbody>

		

	</center>

  </body>