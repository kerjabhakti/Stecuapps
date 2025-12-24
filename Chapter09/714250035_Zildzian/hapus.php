<?php
include("config.php");

// Cek apakah ada ID yang dikirim melalui URL (query string)
if( isset($_GET['id']) ){

    // Ambil ID dari query string
    $id = $_GET['id'];

    // Buat query hapus
    $sql = "DELETE FROM pendaftaran WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    // Apakah query hapus berhasil?
    if( $query ){
        // Jika berhasil, alihkan ke halaman list-maba.php dengan status sukses
        header('Location: list-maba.php?status=hapus-berhasil');
    } else {
        // Jika gagal, tampilkan pesan error
        die("Gagal menghapus data...");
    }

} else {
    // Jika mencoba akses langsung tanpa ID, dilarang
    die("Akses dilarang...");
}
?>