<?php
include("config.php");

if (isset($_POST['daftar'])) {
    $nama = $_POST['Nama'];
    $alamat = $_POST['Alamat'];
    $jenis_kelamin = $_POST['Jenis_kelamin'];
    $agama = $_POST['Agama'];
    $sekolah_asal = $_POST['Sekolah_asal'];

    if (empty($nama)) {
        header("Location: index2.php?error=nama");
        exit;
    }
    if (empty($alamat)) {
        header("Location: index2.php?error=alamat");
        exit;
    }
    if (empty($jenis_kelamin)) {
        header("Location: index2.php?error=jk");
        exit;
    }
    if (empty($agama)) {
        header("Location: index2.php?error=agama");
        exit;
    }
    if (empty($sekolah_asal)) {
        header("Location: index2.php?error=sekolah");
        exit;
    }

    $sql = "INSERT INTO pendaftaran (Nama, Alamat, Jenis_kelamin, Agama, Sekolah_asal) VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header("location: list-maba.php?status=sukses");
    } else {
        header("location: list-maba.php?error=gagal");
    }
    exit;

} else {
    die("Akses dilarang...");
}

?>