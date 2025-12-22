<?php
include("config.php");

// Pastikan 'simpan_data' sesuai dengan name pada tombol di tambah-penghuni.php
if(isset($_POST['simpan_data'])){

    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $nik = $_POST['nik'];

    // Query SQL
    $sql = "INSERT INTO penghuni (NAMA, JENISKELAMIN, ALAMATASAL, NIK) 
            VALUES ('$nama', '$jk', '$alamat', '$nik')";
            
    $query = mysqli_query($db, $sql);

    // CEK DISINI: Pastikan ada header location untuk sukses
    if( $query ) {
        header('Location: data-penghuni.php?status=sukses');
    } else {
        header('Location: data-penghuni.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}
?>