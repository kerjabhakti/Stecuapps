<?php
include("config.php");

// Jika tidak ada ID di query string/URL, kembalikan ke list-maba.php
if( !isset($_GET['id']) ){
    header('Location: list-maba.php');
}

// Ambil ID dari query string
$id = $_GET['id'];

// Buat query untuk mengambil data dari database berdasarkan ID
$sql = "SELECT * FROM pendaftaran WHERE id=$id";
$query = mysqli_query($koneksi, $sql);
$maba = mysqli_fetch_assoc($query);

// Jika data yang diedit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("Data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Mahasiswa | POLTEKPOS</title>
    <link rel="stylesheet" href="css/edit.css">
</head>
<body>
    <header>
        <h3>Formulir Edit Mahasiswa Baru</h3>
    </header>

    <form action="proses-edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $maba['id'] ?>" />

            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $maba['nama'] ?>" />
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat"><?php echo $maba['alamat'] ?></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <?php $jk = $maba['jenis_kelamin']; ?>
                <label><input type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo ($jk == 'Laki-laki') ? "checked": "" ?>> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($jk == 'Perempuan') ? "checked": "" ?>> Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama: </label>
                <?php $agama = $maba['agama']; ?>
                <select name="agama">
                    <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                    <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                    <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                    <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
                </select>
            </p>
            <p>
                <label for="sekolah_asal">Sekolah Asal: </label>
                <input type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $maba['sekolah_asal'] ?>" />
            </p>
            <p>
                <input type="submit" value="Simpan Perubahan" name="simpan" />
            </p>
        </fieldset>
    </form>
</body>
</html>