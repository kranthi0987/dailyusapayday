<?php
/**
 * Created by PhpStorm.
 * User: krant
 * Date: 9/13/2017
 * Time: 1:18 AM
 */

//connect to database
error_reporting(0);

//echo "hai";

include("config.php");

$my_connection = mysql_connect($db_host, $db_user, $db_pass) or die("connection cont be made");

mysql_select_db("dailyusapayday", $my_connection) or die("cant select db");


class usersOnline
{

    var $timeout = 300;
    var $count = 0;
    var $error;
    var $i = 0;

    function usersOnline()
    {
        $this->timestamp = time();
        $this->ip = $this->ipCheck();
        $this->new_user();
        $this->delete_user();
        $this->count_users();
    }

    function ipCheck()
    {
        if (getenv('HTTP_CLIENT_IP')) {
            $ip = getenv('HTTP_CLIENT_IP');
        } elseif (getenv('HTTP_X_FORWARDED_FOR')) {
            $ip = getenv('HTTP_X_FORWARDED_FOR');
        } elseif (getenv('HTTP_X_FORWARDED')) {
            $ip = getenv('HTTP_X_FORWARDED');
        } elseif (getenv('HTTP_FORWARDED_FOR')) {
            $ip = getenv('HTTP_FORWARDED_FOR');
        } elseif (getenv('HTTP_FORWARDED')) {
            $ip = getenv('HTTP_FORWARDED');
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    function new_user()
    {
        $cekIP = "SELECT ip FROM useronline WHERE ip='$this->ip'";
        $resultCekIp = mysql_query($cekIP);
        $countCekIp = mysql_num_rows($resultCekIp);
        if ($countCekIp > 0) {
            $insert1 = mysql_query("UPDATE usersonline SET timestamp='$this->timestamp', date=NOW(), ip='', distinct_ip='$this->ip'");
            if (!$insert1) {
                $this->error[$this->i] = "Unable to record new visitor\r\n";
                $this->i++;
            }
        } else {
            $insert2 = mysql_query("INSERT INTO usersonline (timestamp, date, ip, distinct_ip) VALUES ('$this->timestamp',NOW(), '$this->ip', '$this->ip')");
            if (!$insert2) {
                $this->error[$this->i] = "Unable to record new visitor\r\n";
                $this->i++;
            }
        }
    }

    function delete_user()
    {
        $delete = mysql_query("DELETE FROM usersonline WHERE timestamp < ($this->timestamp - $this->timeout)");
        if (!$delete) {
            $this->error[$this->i] = "Unable to delete visitors";
            $this->i++;
        }
    }

    function count_users()
    {
        if (count($this->error) == 0) {
            $count = mysql_num_rows(mysql_query("SELECT DISTINCT ip FROM usersonline"));
            return $count;
        }
    }
}

?>