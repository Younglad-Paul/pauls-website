<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "login_sample_db2";

if(!$con = mysqli_connect ($dbhost, $dbuser, $dbpassword, $dbname))
{
    die("failed to connect to the internet!");
}

?>