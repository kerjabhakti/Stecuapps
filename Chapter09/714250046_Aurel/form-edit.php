<?php
include("config.php");

$id = $_GET['id'];
$sql = "SELECT * FROM pendaftaran WHERE id=$id";
$query = mysqli_query($db, $sql);

if (!$query) {
    die("Query error: " . mysqli_error($db));
}

$maba = mysqli_fetch_assoc($query);

if (!$maba) {
    die("Data tidak ditemukan");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
</head>
<body>

<h3>Edit Data Mahasiswa</h3>

<form action="proses-edit.php" method="POST">
    <input type="hidden" name="id" value="<?= $maba['id'] ?>">

    <p>
        <label>Nama</label>
        <input type="text" name="Nama" value="<?= $maba['Nama'] ?>" required>
    </p>

    <p>
        <label>Alamat</label>
        <textarea name="Alamat" required><?= $maba['Alamat'] ?></textarea>
    </p>

    <p>
        <label>Jenis Kelamin</label>
        <input type="radio" name="Jenis_kelamin" value="laki-laki"
            <?= $maba['Jenis_kelamin']=='laki-laki'?'checked':'' ?>> Laki-laki
        <input type="radio" name="Jenis_kelamin" value="perempuan"
            <?= $maba['Jenis_kelamin']=='perempuan'?'checked':'' ?>> Perempuan
    </p>

    <p>
        <label>Agama</label>
        <select name="Agama">
            <?php
            $agama = ["Islam","Kristen","Hindu","Budha","Atheis"];
            foreach ($agama as $a) {
                $selected = ($maba['Agama']==$a) ? "selected" : "";
                echo "<option value='$a' $selected>$a</option>";
            }
            ?>
        </select>
    </p>

    <p>
        <label>Sekolah Asal</label>
        <input type="text" name="Sekolah_asal" value="<?= $maba['Sekolah_asal'] ?>" required>
    </p>

    <p>
        <input type="submit" name="simpan" value="Simpan Perubahan">
    </p>
</form>

</body>
</html>
