<?php
include("config.php");

if (isset($_POST['edit'])) {

    $idpasien    = $_POST['ID_Pasien']; // readonly, tidak bisa diubah
    $namapasien  = $_POST['Nama_Pasien'];
    $nowa        = $_POST['Nomor_Whatsapp'];
    $tglkunjungan= $_POST['Tanggal_Kunjungan'];
    $jamkunjungan= $_POST['Jam_kunjungan']; 
    $usia        = $_POST['Usia_kehamilan_(weeks)'];
    $keluhan     = $_POST['Keluhan_pasien'];

    $sql = "UPDATE pelayanan_usg SET 
            Nama_Pasien = '$namapasien', 
            Nomor_Whatsapp = '$nowa',
            Tanggal_Kunjungan = '$tglkunjungan',
            Jam_kunjungan = '$jamkunjungan',
            `Usia_kehamilan_(weeks)` = '$usia',
            Keluhan_pasien = '$keluhan' 
            WHERE ID_Pasien = '$idpasien'";

    $query = mysqli_query($db, $sql);

    if ($query) {
        header("Location: list-pasien.php");
    } else {
        header("Location: form-edit.php?id=$idpasien");
    }

    } else {
    header("Location: list-pasien.php");
    }
?>