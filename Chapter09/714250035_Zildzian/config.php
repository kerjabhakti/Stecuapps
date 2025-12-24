<?php
$host = "localhost";
$user = "root";
$pass = ""; // kosong
$db   = "crangler";

// Perbaikan: Ganti $server menjadi $host agar sesuai dengan variabel yang didefinisikan di atas
$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>