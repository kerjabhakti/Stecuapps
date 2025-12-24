<?php
include("config.php");

// cek apakah tombol daftar sudah diklik atau belum?

if(isset($_POST['daftar'])){
    $idpasien = $_POST['idpendaftaran'];
    $namapasien = $_POST['nama'];
    $nowa = $_POST['nowa'];
    $tglkunjungan = $_POST['tanggal_pelayanan'];
    $jamkunjungan = $_POST['jam_pelayanan'];
    $usia =  $_POST['weeks'];
    $keluhan = $_POST['keluhan'];

    $sql = "INSERT INTO pelayanan_usg (ID_Pasien, Nama_Pasien, Nomor_Whatsapp, Tanggal_Kunjungan, Jam_kunjungan, `Usia_kehamilan_(weeks)`, Keluhan_pasien)
            VALUES ('$idpasien', '$namapasien', '$nowa', '$tglkunjungan', '$jamkunjungan', '$usia', '$keluhan')";
    $query = mysqli_query($db, $sql);
    
    // apakah query simpan berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau berhasil alihkan ke halaman index.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}
?>