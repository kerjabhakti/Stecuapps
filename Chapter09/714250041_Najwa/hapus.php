<?php
    include ("config.php"); 
    $sql = "SELECT * FROM tbl_peserta WHERE id=".$_GET['id'];
    $query = mysqli_query($db, $sql);
    $id = $_GET['id'];

    $sql = "DELETE FROM tbl_peserta WHERE id=$id";
    $query = mysqli_query($db, $sql);
    if($query){
        // echo "Berhasil";
        header('Location: list-peserta.php');
    } else {
        echo "gagal";
        // header('Location: list-peserta.php');
    }
?>