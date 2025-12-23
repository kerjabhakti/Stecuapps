<?php
include("config.php");

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    $sql = "UPDATE pendaftaran SET
            nama='$nama',
            alamat='$alamat',
            jenis_kelamin='$jk',
            agama='$agama',
            sekolah_asal='$sekolah'
            WHERE id=$id";

    if (mysqli_query($db, $sql)) {
        header("Location: list-maba.php");
    } else {
        echo "Gagal update data";
    }
}
