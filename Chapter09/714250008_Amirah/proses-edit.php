<?php
include("config.php");
 
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM data_siswa WHERE id = $id");
$row = $result->fetch_assoc();
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['ssekolah_asal'];
 
    $sql = "UPDATE data_siswa SET 
            nama='$nama', 
            alamat='$alamat', 
            jenis_kelamin='$jk', 
            agama='$agama', 
            sekolah_asal='$sekolah' 
            WHERE id=$id";
 
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>