<?php
error_reporting(0);
session_start();
if(isset($_SESSION['auth123']))
{
//echo $_SESSION['auth123'];
//echo "<center><h>you are logged out successfully</p><br><p><a href="index.html">click here</a> to go to home</p></center>";

session_destroy();
header ("Location: usage.html");
/* Make sure that code below does not get executed when we redirect. */
exit ;
}
else
{
header ("Location: usage.html");
}
?>