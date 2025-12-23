<?php
include("config.php");

if (!isset($_GET['id'])) {
	header('Location: list-maba.php');
	exit;
}

$id = intval($_GET['id']);
$sql = "SELECT * FROM mahasiswabaru WHERE id = $id";
$result = mysqli_query($db, $sql);
$maba = mysqli_fetch_assoc($result);

if (!$maba) {
	header('Location: list-maba.php');
	exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Data Mahasiswa | ULBI</title>
	<style>
		body { font-family: Arial, Helvetica, sans-serif; background-color: #f4f6f8; margin: 0; padding: 0; }
		header { background-color: #2c7be5; color: white; padding: 15px; text-align: center; }
		form { width: 400px; margin: 30px auto; background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
		fieldset { border: none; }
		form p { margin-bottom: 15px; }
		label { display: block; font-weight: bold; margin-bottom: 5px; }
		input[type="text"], textarea, select { width: 100%; padding: 8px; box-sizing: border-box; border-radius: 4px; border: 1px solid #ccc; }
		textarea { resize: vertical; }
		input[type="radio"] { margin-right: 5px; }
		input[type="submit"] { background-color: #2c7be5; color: white; border: none; padding: 10px; width: 100%; border-radius: 5px; cursor: pointer; font-size: 16px; }
		input[type="submit"]:hover { background-color: #1a68d1; }
	</style>
</head>
<body>

<header>
	<h3>Form Edit Mahasiswa</h3>
</header>

<form action="proses-edit.php" method="POST">
	<fieldset>

		<input type="hidden" name="id" value="<?php echo $maba['id']; ?>">

		<p>
			<label>Nama:</label>
			<input type="text" name="nama" value="<?php echo htmlspecialchars($maba['nama']); ?>" required>
		</p>

		<p>
			<label>Alamat:</label>
			<textarea name="alamat" required><?php echo htmlspecialchars($maba['alamat']); ?></textarea>
		</p>

		<p>
			<label>Jenis Kelamin:</label>
			<input type="radio" name="jenis_kelamin" value="laki-laki" <?php if($maba['jenis_kelamin']=='laki-laki') echo 'checked'; ?> required> Laki-laki
			<input type="radio" name="jenis_kelamin" value="perempuan" <?php if($maba['jenis_kelamin']=='perempuan') echo 'checked'; ?>> Perempuan
		</p>

		<p>
			<label>Agama:</label>
			<select name="agama" required>
				<option value="">-- Pilih Agama --</option>
				<option <?php if($maba['agama']=='Islam') echo 'selected'; ?>>Islam</option>
				<option <?php if($maba['agama']=='Kristen') echo 'selected'; ?>>Kristen</option>
				<option <?php if($maba['agama']=='Hindu') echo 'selected'; ?>>Hindu</option>
				<option <?php if($maba['agama']=='Budha') echo 'selected'; ?>>Budha</option>
				<option <?php if($maba['agama']=='Katolik') echo 'selected'; ?>>Katolik</option>
				<option <?php if($maba['agama']=='Khonghucu') echo 'selected'; ?>>Khonghucu</option>
			</select>
		</p>

		<p>
			<label>Sekolah Asal:</label>
			<input type="text" name="sekolah_asal" value="<?php echo htmlspecialchars($maba['sekolah_asal']); ?>" required>
		</p>

		<p>
			<input type="submit" name="edit" value="Simpan Perubahan">
		</p>

	</fieldset>
</form>

</body>
</html>

