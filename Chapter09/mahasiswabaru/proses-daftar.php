<?php
include("config.php");

// cek apakah tombol daftar sudah diklik
if(isset($_POST['daftar'])){

    // ambil data dari form
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];

    // buat query insert
    $sql = "INSERT INTO pendaftaran (nama, alamat, jenis_kelamin, agama, sekolah_asal)
            VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal')";

    $query = mysqli_query($db, $sql);

    // cek query
    if($query){
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}
?>