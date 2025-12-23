<?php
$db = mysqli_connect("localhost", "root", "", "mahasiswabaru");

if (!$db) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
