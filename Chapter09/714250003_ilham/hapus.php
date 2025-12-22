<?php
include("config.php");
if( isset($_GET['nik']) ){
    $nik = $_GET['nik'];
    $sql = "DELETE FROM penghuni WHERE NIK=$nik";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: data-penghuni.php');
    } else {
        die("Gagal menghapus...");
    }
} else {
    die("Akses dilarang...");
}
?>