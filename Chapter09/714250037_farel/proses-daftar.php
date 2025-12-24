<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("config.php");

if (isset($_POST['daftar'])) {

    $nama    = $_POST['nama'];
    $alamat  = $_POST['alamat'];
    $jk      = $_POST['jenis_kelamin'];
    $agama   = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    // ✅ nama tabel diperbaiki
    $sql = "INSERT INTO mahasiswabaru 
            (nama, alamat, jenis_kelamin, agama, sekolah_asal)
            VALUES 
            ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";

    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}
