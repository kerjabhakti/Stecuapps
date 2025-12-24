<?php
include("config.php");

// cek apakah tombol update sudah diklik atau belum? 
if(isset($_POST['update'])){

    //ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];

    //buat query
    $sql = "UPDATE pendaftaran SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', sekolah_asal='$sekolah_asal' WHERE id='$id'";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if($query){
        //kalau berhasil alihkan ke halaman list-maba.php dengan status=diupdate
        header('Location: list-maba.php?status=diupdate');
    } else {
        //kalau gagal alihkan ke halaman list-maba.php dengan status=gagal
        header('Location: list-maba.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
?>
