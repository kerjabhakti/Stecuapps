<?php
include ("config.php");

if(isset($_POST['daftar'])){
    $nama = $_POST['nama'];
    $tingkat = $_POST['tingkat'];
    $kategori = $_POST['kategori'];
    
    $sql = "INSERT INTO tbl_peserta (nama, tingkat, kategori) VALUE ('$nama', '$tingkat', '$kategori')";
    $query = mysqli_query($db, $sql);
    
    if($query){
        header('Location: index1.php?status=sukses');
    } else {
        header('Location: index1.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>