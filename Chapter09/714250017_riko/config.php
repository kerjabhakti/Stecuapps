<?php
$server = "localhost";
$user = "root";
$password = "";
$namedb = "lat_perpus";

$db = mysqli_connect($server, $user, $password, $namedb);

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>