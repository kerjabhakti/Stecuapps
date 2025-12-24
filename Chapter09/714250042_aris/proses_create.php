<link rel="stylesheet" href="style.css">
<?php

include 'koneksi.php';

$nama_barang = $_POST['nama_barang'];
$tanggal_masuk = $_POST['tanggal_masuk'];
$harga_barang = $_POST['harga_barang'];
$stok = $_POST['stok'];
$deskripsi = $_POST['deskripsi'];

$namaFile = $_FILES['foto']['name'];
$namaSementara = $_FILES['foto']['tmp_name'];
$dirUpload = "foto/";

$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

mysqli_query($koneksi, "INSERT INTO data_barang VALUES('', '$nama_barang' , '$tanggal_masuk' , '$harga_barang' , '$stok' , '$deskripsi' , '$namaFile')");
echo "<div class='message'>
                      <p>Berhasil Menambahkan Buku!</p>
                  </div> <br>";
echo "<a href='login.php'><button class='btn'>Kembali</button>";

?>
