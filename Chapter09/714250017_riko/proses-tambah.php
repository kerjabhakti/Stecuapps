<?php
include("config.php");

    if (isset($_POST['tambah'])) {

    $isbn     = $_POST['isbn'];
    $judul    = $_POST['judul_buku'];
    $jenis    = $_POST['jenis_buku'];
    $pembuat  = $_POST['pembuat_buku'];
    $tanggal  = $_POST['tanggal_buku'];
    $rak      = $_POST['rak_buku'];

    $sql = "INSERT INTO buku 
            (isbn, judul_buku, jenis_buku, pembuat_buku, tanggal_buku, rak_buku)
            VALUES 
            ('$isbn', '$judul', '$jenis', '$pembuat', '$tanggal', '$rak')";

    $query = mysqli_query($db, $sql);

    if ($query) {
        header("Location: index.php?status=sukses");
    } else {
        header("Location: index.php?status=gagal");
    }

    } else {
    die("Akses dilarang");
}
