<?php
include("config.php");

// Cek apakah form dikirim dengan metode POST dan tombol edit ditekan
if (isset($_POST['edit'])) {

  // Ambil data dari form
  $isbn        = $_POST['isbn']; // readonly, tidak bisa diubah
    $judul       = $_POST['judul_buku'];
    $jenis       = $_POST['jenis_buku'];
    $pembuat     = $_POST['pembuat_buku'];
    $tanggal     = $_POST['tanggal_buku'];
    $rak         = $_POST['rak_buku'];


    // Query UPDATE data buku berdasarkan ISBN
    $sql = "UPDATE buku SET 
            judul_buku = '$judul',
            jenis_buku = '$jenis', 
            pembuat_buku = '$pembuat',
            tanggal_buku = '$tanggal',
            rak_buku = '$rak'
            WHERE isbn = '$isbn'";

    $query = mysqli_query($db, $sql);

    // Redirect setelah proses
    if ($query) {
        header("Location: list-buku.php");
    } else {
        header("Location: form-edit.php?id=$isbn");
    }

    } else {
    // Jika diakses langsung tanpa POST, redirect ke list
    header("Location: list-buku.php");
    }
?>
