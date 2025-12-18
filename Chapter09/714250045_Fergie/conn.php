<?php
$koneksi = mysqli_connect("localhost","root","","konveksi"); 
if (!$koneksi) { //cek koneksi
    die("koneksi gagal");
}