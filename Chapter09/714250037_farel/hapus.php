<?php
include("config.php");

if (isset($_GET['id'])) {
	$id = intval($_GET['id']);

	$sql = "DELETE FROM mahasiswabaru WHERE id = $id";
	$query = mysqli_query($db, $sql);

	if ($query) {
		header('Location: list-maba.php?status=hapus_sukses');
		exit;
	} else {
		header('Location: list-maba.php?status=hapus_gagal');
		exit;
	}

} else {
	header('Location: list-maba.php');
	exit;
}

?>
