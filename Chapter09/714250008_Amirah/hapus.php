&lt;<?php
include("config.php");
 
$id = $_GET['id'];
 
$sql = "DELETE FROM data_siswa WHERE id = $id";
 
if ($->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "&lt;br>" . $conn->error;
}
?>