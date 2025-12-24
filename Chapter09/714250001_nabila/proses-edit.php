<?php
include("config.php");

if(isset($_POST['simpan'])){
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

$sql = "UPDATE pendaftaran SET
nama='$nama',
alamat='$alamat'
WHERE id=$id";

$query = mysqli_query($db, $sql);

if($query){
    header("Location: list-maba.php");
}
}
?>
