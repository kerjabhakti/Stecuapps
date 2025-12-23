<?php
include("config.php");

// Ambil ID dari URL
$id = $_GET['id'];

// Buat query hapus
$sql = "DELETE FROM pendaftaran WHERE nim = $id";
$query = mysqli_query($db, $sql);

// Apakah query hapus berhasil?
if( $query ) {
    // Kalau berhasil alihkan ke halaman list-maba.php dengan status=sukses
    header('Location: list-maba.php?status=sukses');
} else {
    // Kalau gagal alihkan ke halaman list-maba.php dengan status=gagal
    header('Location: list-maba.php?status=gagal');
}
?>
