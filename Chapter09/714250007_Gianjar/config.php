<?php
$server   = "localhost";
$user     = "root";
$password = "";
$namadb   = "mahasiswa_baru";

$db = mysqli_connect($server, $user, $password, $namadb);

if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>
