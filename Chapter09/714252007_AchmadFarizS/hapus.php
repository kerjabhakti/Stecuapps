<?php
include("config.php");

if (!isset($_GET['id'])) {
    die("ID tidak ditemukan");
}

$id = $_GET['id'];

$sql = "DELETE FROM pendaftaran WHERE id=$id";

if (mysqli_query($db, $sql)) {
    header("Location: list-maba.php");
} else {
    echo "Gagal menghapus data";
}
