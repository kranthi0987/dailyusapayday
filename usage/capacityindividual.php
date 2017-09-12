<html>



<head>

<style>

	h2{

		font-family:Arial Black;

		color: black;

		text-align:center;

	}



	h4{

		font-family:Arial Rounded MT Bold;

		color: #003366;

		text-align:left



	}



	td h4{



		align: center;

	}

	

	.date{

		text-align: center;

	}

	

	





</style>



</head>

<?php  

	

	//echo $_GET["rid"];

	

	include("config.php");

	$my_connection = mysql_connect($db_host , $db_user , $db_pass) or die("connection cont be made");

	mysql_select_db("sheshsiu_amex",$my_connection) or die("cant select db");

	

	

	$rid = $_GET["rid"];

	

	//for name out

	$query1 ="select name from resources where rid ='$rid'	 ";

	$result1 = mysql_query( $query1 , $my_connection) or die(mysql_error());

	//echo "started" . "<br>";

	while($row1 = mysql_fetch_array($result1)) {

		

		//echo $row1['name'] . "<br>";

		$nameout =$row1['name'];

	}

	



?>







<body>



	<center>

		<h2> capacity sheet </h2>

		<h4 style: left-margin: 15px;>Welcome <?php echo $nameout; ?></h4>

		<form action="capacitysubmit.php" method="POST">

		<table>

			<thead>

				<tr>

				<td><h4>ID</h4></td><td><h4>Project Name</h4></td><td><h4 class="date date1"><?php echo $friday = date("Y-m-d",strtotime( "next friday" )); ?></h4></td><td><h4 class="date date1"><?php echo date( "Y-m-d", strtotime( $friday.' +1 week' ) ); ?></h4></td><td><h4 class="date date1"><?php echo date( "Y-m-d", strtotime( $friday.' +2 week' ) ); ?></h4></td><td><h4 class="date date1"><?php echo date( "Y-m-d", strtotime( $friday.' +3 week' ) ); ?></h4></td><td><h4 class="date date1"><?php echo date( "Y-m-d", strtotime( $friday.' +4 week' ) ); ?></h4></td>

				</tr>

				

			</thead>

			<tbody>

				

				<?php

					// for list of projects

					$query ="select * from projects  limit 0,40";

					$result = mysql_query( $query , $my_connection) or die(mysql_error());

					$num=mysql_numrows($result);

					$i=0;

					$p = 1;

					while($row = mysql_fetch_array($result)) 

					{

						

						if (strpos($row['allocated'],$rid) !== false) 

						{

						

				?>

				<tr>

					<td><p><?php echo $row['pid'] ?><p></td><td><p><?php echo $row['name'] ?><p></td><td><input type="text" class="w1"/></td><td><input type="text" class="w2" /></td><td><input class="w3" type="text" /></td><td><input class="w4" type="text" /></td><td><input class="w5" type="text" /></td>

				</tr>	

				<input type="text" style="visibility:hidden" name="p<?php echo $p; ?>"value="<?php echo $row['name'] ?>" />

				<?php

						$p++;

						}

						

					}

				?>

				

				<tr>

					<td></td><td><h5>Total</h5></td><td><input id="week1"  type="text"  name ="week1" readonly/></td><td><input id="week2"  type="text" name ="week2" readonly/></td><td><input id="week3"  type="text" name ="week3" readonly/></td><td><input id="week4"   type="text" name ="week4" readonly/></td><td><input id="week5"  type="text" name ="week5" readonly/></td>

				</tr>

				<tr>

				<center>

				<input type="submit" value="submit">

				</center>

				</tr>

							

			</tbody>

		</table>

			</form>	

	</center>

	

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">

	</script>

	<script>

		$(document).ready(function(){

			

			

			$( ".w2" ).change(function() {

				$w1total = 0;

				$(".w2").each(function() {

					if ($(this).val().length > 0) {

					$w1total = $w1total +  parseInt($(this).val());

					}				

					});

				$("#week2").val($w1total);

				

			});

			$( ".w3" ).change(function() {

				$w1total = 0;

				$(".w3").each(function() {

					if ($(this).val().length > 0) {

					$w1total = $w1total +  parseInt($(this).val());

					}

					});

				$("#week3").val($w1total);

				

			});

			$( ".w4" ).change(function() {

				$w1total = 0;

				$(".w4").each(function() {

					if ($(this).val().length > 0) {

					$w1total = $w1total +  parseInt($(this).val());

					}

					});

				$("#week4").val($w1total);

				

			});

			$( ".w5" ).change(function() {

				$w1total = 0;

				$(".w5").each(function() {

					if ($(this).val().length > 0) {

					$w1total = $w1total +  parseInt($(this).val());

					}

					});

				$("#week5").val($w1total);

				

			});

			

			$( ".w1" ).change(function() {

				$wtotal = 0;

				//alert($wtotal);	

				$(".w1").each(function() {

					

					if ($(this).val().length > 0) {

					$wtotal = $wtotal +  parseInt($(this).val());

					}

						

					});

				$("#week1").val($wtotal);

				//alert($wtotal);

				

			});

		});

	</script>

  </body>