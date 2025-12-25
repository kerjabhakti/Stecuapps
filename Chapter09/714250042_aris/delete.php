<link rel="stylesheet" href="style.css">
<?php

include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM data_barang WHERE id='$id'");

echo "<div class='message'>
                      <p>Buku Di Hapus!</p>
                  </div> <br>";
            echo "<a href='login.php'><button class='btn'>Kembali</button>";

?>