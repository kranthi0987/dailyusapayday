<html>


<head>

    <title>login</title>

</head>


<body>


<center>

    <h2>employee login</h2>

    <table>

        <tbody>

        <?php

        error_reporting(0);

        //echo "hai";

        include("config.php");

        $my_connection = mysql_connect($db_host, $db_user, $db_pass) or die("connection cont be made");

        mysql_select_db("sheshsiu_amex", $my_connection) or die("cant select db");


        // retrive

        $query = "select * from resources  limit 0,40";

        $result = mysql_query($query, $my_connection) or die(mysql_error());

        $num = mysql_numrows($result);

        $i = 0;


        while ($row = mysql_fetch_array($result)) {

            $i++;


            ?>

            <tr>

                <td><a href="capacityindividual.php?rid=<?php echo $row['rid'] ?>"><?php echo $row['name'] ?></a></td>


            </tr>


            <?php

        }


        ?>

        </tbody>

    </table>


</center>

</body>