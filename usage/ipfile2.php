<?php
/**
 * Created by PhpStorm.
 * User: krant
 * Date: 9/13/2017
 * Time: 1:20 AM
 */
include('ipfile.php');
$jml_ol = new usersOnline();
if (count($jml_ol->error) == 0) {
    if ($jml_ol->count_users() == 1) {
        echo $jml_ol->count_users() . "<br />";
        echo "Your IP: " . $jml_ol->ipCheck();
    } else {
        echo $jml_ol->count_users() . "<br />";
        echo "Your IP: " . $jml_ol->ipCheck();
    }
}
?>