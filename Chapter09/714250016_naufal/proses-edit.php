<?php
include("config.php");

// Cek apakah tombol simpan sudah diklik
if(isset($_POST['simpan'])){
    
    // Ambil data dari formulir
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];

    // Buat query update
    $sql = "UPDATE pendaftaran SET nama='$nama', `jenis kelamin`='$jk', agama='$agama' WHERE nim=$nim";
    $query = mysqli_query($db, $sql);

    // Apakah query update berhasil?
    if( $query ) {
        // Kalau berhasil alihkan ke halaman list-maba.php dengan status=sukses
        header('Location: list-maba.php?status=sukses');
    } else {
        // Kalau gagal alihkan ke halaman list-maba.php dengan status=gagal
        header('Location: list-maba.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}
?>
