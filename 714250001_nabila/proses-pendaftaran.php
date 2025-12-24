<?php
include("config.php");

if (isset($_POST['daftar'])) {

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $posisi = $_POST['posisi'];
    $pengalaman = $_POST['pengalaman'];

    $sql = "INSERT INTO pendaftaran 
            (nama, alamat, jenis_kelamin, posisi, pengalaman)
            VALUES 
            ('$nama', '$alamat', '$jenis_kelamin', '$posisi', '$pengalaman')";

    $query = mysqli_query($db, $sql);

    if ($query) {
        header("Location: list-maba.php");
    } else {
        echo "Gagal menyimpan data";
    }
}
?>
