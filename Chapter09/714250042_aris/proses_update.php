<link rel="stylesheet" href="style.css">
<?php

include 'koneksi.php';

$id = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$tanggal_masuk = $_POST['tanggal_masuk'];
$harga_barang = $_POST['harga_barang'];
$stok = $_POST['stok'];
$deskripsi = $_POST['deskripsi'];
$namaFile = $_FILES['foto']['name'];
if ($namaFile != "") {
    $namaSementara = $_FILES['foto']['tmp_name'];

    $dirUpload = "foto/";

    $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

    $query = mysqli_query($koneksi, "UPDATE data_barang set nama_barang='$nama_barang', tanggal_masuk='$tanggal_masuk' , harga_barang='$harga_barang' , stok='$stok', deskripsi='$deskripsi' , foto='$namaFile' WHERE id='$id'");

    if ($query) {
        echo "<div class='message'>
                      <p>Edit Sukses!</p>
                  </div> <br>";
            echo "<a href='login.php'><button class='btn'>Kembali</button>";
    }
} else {
    $data = mysqli_query($koneksi,"select * from data_barang where id='$id'");
    $p = mysqli_fetch_array($data);
    $foto = $p['foto'];

    $query = mysqli_query($koneksi, "UPDATE data_barang set nama_barang='$nama_barang', tanggal_masuk='$tanggal_masuk' , harga_barang='$harga_barang' , stok='$stok', deskripsi='$deskripsi' , foto='$foto' WHERE id='$id'");

    if ($query) {
       echo "<div class='message'>
                      <p>Edit Sukses!</p>
                  </div> <br>";
            echo "<a href='login.php'><button class='btn'>Kembali</button>";
    }
}

?>