<?php
include("config.php");

// Cek apakah tombol daftar sudah diklik atau belum?
if(isset($_POST['daftar'])){

    // Ambil data dari formulir
    // Pastikan name di form HTML sesuai (nama, alamat, jenis_kelamin, agama, sekolah_asal)
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    // Buat query
    $sql = "INSERT INTO pendaftaran (nama, alamat, jenis_kelamin, agama, sekolah_asal) 
            VALUES ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
    
    // PERBAIKAN: Ganti $db menjadi $koneksi
    $query = mysqli_query($koneksi, $sql);

    // Apakah query simpan berhasil?
    if( $query ) {
        // Kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // Kalau gagal alihkan ke halaman index.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}
?>