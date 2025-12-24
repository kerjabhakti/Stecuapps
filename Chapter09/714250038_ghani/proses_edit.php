<?php
include "config.php";

if(isset($_POST['simpan'])){

    $id = $_POST['id_produk'];
    $id_kategori = $_POST['id_kategori'];
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $deskripsi = $_POST['deskripsi'];
    $jenis = $_POST['jenis'];
    $gender = $_POST['gender'];

    // cek apakah user upload gambar baru
    if($_FILES['gambar']['name'] != ""){
        $namaFile = $_FILES['gambar']['name'];
        $tmp = $_FILES['gambar']['tmp_name'];

        // ambil data lama untuk hapus file lama
        $sqlOld = "SELECT gambar FROM produk WHERE id_produk = $id";
        $queryOld = mysqli_query($db, $sqlOld);
        $old = mysqli_fetch_assoc($queryOld);

        if(file_exists("img/" . $old['gambar'])){
            unlink("img/" . $old['gambar']);
        }

        // upload gambar baru
        move_uploaded_file($tmp, "img/" . $namaFile);

        // update database dengan gambar baru
        $sql = "UPDATE produk SET 
                id_kategori='$id_kategori',
                nama_produk='$nama_produk',
                harga='$harga',
                stok='$stok',
                deskripsi='$deskripsi',
                gambar='$namaFile',
                jenis='$jenis',
                gender='$gender'
            WHERE id_produk=$id";
    } else {
        // update tanpa gambar baru
        $sql = "UPDATE produk SET 
                id_kategori='$id_kategori',
                nama_produk='$nama_produk',
                harga='$harga',
                stok='$stok',
                deskripsi='$deskripsi',
                jenis='$jenis',
                gender='$gender'
            WHERE id_produk=$id";
    }

    $query = mysqli_query($db, $sql);

    if($query){
        header("Location: list_produk.php");
    } else {
        echo "Gagal mengupdate data!";
    }
}
?>
