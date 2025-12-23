<?php
include("config.php");

if (isset($_POST['simpan'])) {

    $id = $_POST['id'];
    $nama = $_POST['Nama'];
    $alamat = $_POST['Alamat'];
    $jenis_kelamin = $_POST['Jenis_kelamin'];
    $agama = $_POST['Agama'];
    $sekolah = $_POST['Sekolah_asal'];

    $sql = "UPDATE pendaftaran SET
            Nama='$nama',
            Alamat='$alamat',
            Jenis_kelamin='$jenis_kelamin',
            Agama='$agama',
            Sekolah_asal='$sekolah'
            WHERE id=$id";

    $query = mysqli_query($db, $sql);

    if ($query) {
        header("Location: list-maba.php?status=edit_sukses");
    } else {
        header("Location: list-maba.php?status=edit_gagal");
    }

} else {
    die("Akses dilarang...");
}
