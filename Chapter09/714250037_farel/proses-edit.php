<?php
include("config.php");

if (isset($_POST['edit'])) {
	$id = intval($_POST['id']);
	$nama = mysqli_real_escape_string($db, $_POST['nama']);
	$alamat = mysqli_real_escape_string($db, $_POST['alamat']);
	$jk = mysqli_real_escape_string($db, $_POST['jenis_kelamin']);
	$agama = mysqli_real_escape_string($db, $_POST['agama']);
	$sekolah = mysqli_real_escape_string($db, $_POST['sekolah_asal']);

	$sql = "UPDATE mahasiswabaru SET 
			nama = '$nama',
			alamat = '$alamat',
			jenis_kelamin = '$jk',
			agama = '$agama',
			sekolah_asal = '$sekolah'
			WHERE id = $id";

	$query = mysqli_query($db, $sql);

	if ($query) {
		header('Location: list-maba.php?status=edit_sukses');
		exit;
	} else {
		header('Location: list-maba.php?status=edit_gagal');
		exit;
	}

} else {
	die("Akses dilarang...");
}

?>
