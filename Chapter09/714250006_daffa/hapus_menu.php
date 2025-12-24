<?php
include 'config.php';
mysqli_query($conn, "DELETE FROM menu WHERE id_menu=$_GET[id]");
header("location:menu.php");
?>