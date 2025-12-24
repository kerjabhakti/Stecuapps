<?php
include("config.php");
$id = $_GET['id'];
$sql = "SELECT * FROM pendaftaran WHERE id=$id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);
?>

<form action="proses-edit.php" method="POST">
<input type="hidden" name="id" value="<?php echo $data['id']; ?>">

<input type="text" name="nama" value="<?php echo $data['nama']; ?>">
<textarea name="alamat"><?php echo $data['alamat']; ?></textarea>

<button type="submit" name="simpan">Simpan Perubahan</button>
</form>
