<?php
$server = "localhost";
$username = "root";
$password = "demo123";
$database = "votingsystem";

$con = mysqli_connect($server, $username, $password, $database);

if(!$con)
{
    die(mysqli_error($con));
}


?>