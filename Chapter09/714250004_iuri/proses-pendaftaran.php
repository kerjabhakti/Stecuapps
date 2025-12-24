<?php
include("config.php"); // Hubungkan ke database

// Cek apakah tombol 'simpan' sudah diklik
if(isset($_POST['simpan'])){
    
    // Tangkap data dari form ke dalam variabel
    $menu = $_POST['menu'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $wa = $_POST['nomerwa'];

    // Perintah SQL untuk masukkan data (Sesuai kolom tabel Anda)
    $sql = "INSERT INTO warungaas (menu, harga, deskripsi, nomerwa) 
            VALUES ('$menu', '$harga', '$deskripsi', '$wa')";
    
    $query = mysqli_query($db, $sql);

    // Cek apakah berhasil
    if($query) {
        // Jika berhasil, balikkan ke halaman list-menu
        header('Location: list-menu.php?status=sukses');
    } else {
        // Jika gagal
        header('Location: list-menu.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
?>