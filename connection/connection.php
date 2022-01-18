<?php

$dbhost = "localhost";
$dbusername = "root";
$password = "";
$dbname = "test";

$conn = mysqli_connect($dbhost, $dbusername, $password, $dbname);

if (!$conn) {
    die("Could not connect to".mysqli_connect_error());
}

?>