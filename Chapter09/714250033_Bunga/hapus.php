<?php
include("config.php");

// Cek apakah ada parameter id yang dikirim
if (isset($_GET['id'])) {
    $id_hapus = $_GET['id'];

    // Ambil data pendaftar untuk memastikan ada
    $sql = "SELECT * FROM pelayanan_usg WHERE ID_Pasien = '$id_hapus'";
    $query = mysqli_query($db, $sql);
    $pasienusg = mysqli_fetch_array($query);


    // Cek apakah data ditemukan
    if (!$pasienusg) {
        header("Location: list-pasien.php");
        exit();
    }

    // Query DELETE berdasarkan ID
    $sql_delete = "DELETE FROM pelayanan_usg WHERE ID_Pasien = '$id_hapus'";
    $query_delete = mysqli_query($db, $sql_delete);

    // Redirect ke list-pasien.php setelah hapus
    header("Location: list-pasien.php");
    exit();
} else {
    header("Location: list-pasien.php");
    exit();
}
?>