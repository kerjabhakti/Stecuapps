<?php
include("config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM pendaftaran WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: list-maba.php?status=sukses');
    } else {
        header('Location: list-maba.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
?>
