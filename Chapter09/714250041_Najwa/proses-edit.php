<?php
include ("config.php");


if($_POST['daftar']){
    $nama = $_POST['nama'];
    $tingkat = $_POST['tingkat'];
    $kategori = $_POST['kategori'];
    // var_dump($_GET['id'], $nama, $tingkat, $kategori);

    $sql = "UPDATE tbl_peserta SET nama='$nama', tingkat='$tingkat', kategori='$kategori' WHERE id=".$_GET['id'];
    $query = mysqli_query($db, $sql);
    if($query){
        header('Location: list-peserta.php');
    } else {
        echo "<script>alertGagal();</script>";
    }

} else {
    die("Akses dilarang...");
}

?>
<script src="alert.js"></script>