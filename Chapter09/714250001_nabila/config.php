<?php
$db = mysqli_connect("localhost", "root", "", "barista_cafe");

if (!$db) {
    die("Gagal koneksi database: " . mysqli_connect_error());
}
?>
