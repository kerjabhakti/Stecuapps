<?php
include "config.php";

if(isset($_POST['simpan'])){

    $id_kategori = $_POST['id_kategori'];
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $deskripsi = $_POST['deskripsi'];

    // proses upload gambar
    $namaFile = $_FILES['gambar']['name'];
    $lokasiTmp = $_FILES['gambar']['tmp_name'];

    // pindahkan file ke folder img/
    move_uploaded_file($lokasiTmp, "img/" . $namaFile);

    $jenis = $_POST['jenis'];
    $gender = $_POST['gender'];

    // masukkan data ke database
    $sql = "INSERT INTO produk (id_kategori, nama_produk, harga, stok, deskripsi, gambar, jenis, gender)
            VALUES ('$id_kategori', '$nama_produk', '$harga', '$stok', '$deskripsi', '$namaFile', '$jenis', '$gender')";
    
    $query = mysqli_query($db, $sql);

    if($query){
        header("Location: list_produk.php");
    } else {
        echo "Gagal menambah data!";
    }
}
?>
