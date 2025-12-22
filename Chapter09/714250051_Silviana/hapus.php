<?php
include("config.php");

// cek apakah id sudah dikirim atau belum?
if(isset($_GET['id'])){
    
//ambil id dari url
    $id = $_GET['id'];
    
//buat query untuk menghapus data
    $sql = "DELETE FROM pendaftaran WHERE id='$id'";
    $query = mysqli_query($db, $sql);
    
// apakah query berhasil?
    if($query){
        //kalau berhasil alihkan ke halaman list-maba.php dengan status=terhapus
        header('Location: list-maba.php?status=terhapus');
    } else {
        //kalau gagal alihkan ke halaman list-maba.php dengan status=gagalhapus
        header('Location: list-maba.php?status=gagalhapus');
    }
} else {
    die("Akses dilarang...");
}
?>

