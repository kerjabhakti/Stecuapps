<?php
include("config.php");

if (isset($_POST['daftar'])) {

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];

    $sql = "INSERT INTO pendaftaran (nama, alamat, jenis_kelamin, agama, sekolah_asal)
            VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal')";

    if (mysqli_query($db, $sql)) {
        header("Location: list-maba.php?status=berhasil");
        exit;
    } else {
        echo "Gagal menyimpan data";
    }

} else {
    die("Akses dilarang");
}
