<?php
include("config.php");

$id = $_GET['id'];
$aksi = $_GET['aksi'];

if ($aksi == "terima") {
    $status = "Diterima";
} else {
    $status = "Ditolak";
}

mysqli_query($db, "UPDATE pendaftaran SET status='$status' WHERE id=$id");
header("Location: list-maba.php");
