<?php
include "config.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];

    // ambil data untuk menghapus file gambar juga (opsional)
    $sqlGet = "SELECT gambar FROM produk WHERE id_produk = $id";
    $queryGet = mysqli_query($db, $sqlGet);
    $data = mysqli_fetch_assoc($queryGet);

    // hapus file gambar (jika ada)
    if(file_exists("img/" . $data['gambar'])){
        unlink("img/" . $data['gambar']);
    }

    // hapus data dari database
    $sql = "DELETE FROM produk WHERE id_produk = $id";
    $query = mysqli_query($db, $sql);

    if($query){
        header("Location: list_produk.php");
    } else {
        echo "Gagal menghapus data!";
    }

} else {
    die("Akses dilarang...");
}
?>
