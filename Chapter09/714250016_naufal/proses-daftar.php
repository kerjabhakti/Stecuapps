<?php
include("config.php");

//cek apakah tombol daftar sudah di klik atau belum
if(isset($_POST['daftar'])){
    
    // ambil data dari formulir
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];

    // buat query
    $sql = "INSERT iNTO pendaftaran (nama, `jenis kelamin`, agama)
    VALUES ('$nama', '$jk', '$agama')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman index.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }

} else {
    die("AKses dilarang...");
}
?>