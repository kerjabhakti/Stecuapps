<?php
$server = "localhost";
$user = "root";
$password = ""; 
$namadb = "warungaas"; 

$db = mysqli_connect($server, $user, $password, $namadb);

if (!$db) {
    die("Gagal terhubung ke database: " . mysqli_connect_error());
}
?>