<?php
include 'config.php';
mysqli_query($conn, "DELETE FROM transaksi WHERE id_transaksi=$_GET[id]");
header("location:transaksi.php");
?>