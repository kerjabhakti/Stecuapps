<?php
include("config.php");

// Kalau tidak ada id di query string, langsung dialihkan ke list-maba.php
if (!isset($_GET['id'])) {
    header('Location: list-maba.php');
}

// Ambil id dari query string
$id = $_GET['id'];

// Buat query untuk ambil data dari database
$sql = "SELECT * FROM pendaftaran WHERE id=$id";
$query = mysqli_query($db, $sql);
$maba = mysqli_fetch_assoc($query);

// Jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Mahasiswa Baru</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h3>Formulir Edit Mahasiswa Baru</h3>
        <h1>Universitas Logistik dan Bisnis Internasional</h1>
    </header>

    <nav>
        <a href="list-maba.php">[+] Kembali ke Daftar</a>
    </nav>

    <br>

    <form action="proses-edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $maba['id']; ?>">

            <p>
                <label for="nama">Nama Lengkap:</label>
                <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $maba['nama']; ?>"/>
            </p>

            <p>
                <label for="alamat">Alamat:</label>
                <textarea name="alamat"><?php echo $maba['alamat']; ?></textarea>
            </p>

            <p>
                <label for="jenis_kelamin">Jenis Kelamin:</label>

                <label><input type="radio" name="jenis_kelamin" value="Laki-laki" id="laki-laki" <?php if($maba['jenis_kelamin'] == 'Laki-laki') echo 'checked'; ?>/> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan" <?php if($maba['jenis_kelamin'] == 'Perempuan') echo 'checked'; ?>/> Perempuan</label>
            </p>

            <p>
                <label for="agama">Agama:</label>
                <select name="agama" id="agama">
                    <option value="">Pilih Agama</option>
                    <?php
                    $agamas = array("Islam", "Kristen", "Katolik", "Hindu", "Budha", "Atheis");
                    foreach ($agamas as $agama) {
                        $selected = ($agama == $maba['agama']) ? 'selected' : '';
                        echo "<option value='$agama' $selected>$agama</option>";
                    }
                    ?>
                </select>
            </p>

            <p>
                <label for="sekolah_asal">Sekolah Asal:</label>
                <input type="text" name="sekolah_asal" id="sekolah_asal" value="<?php echo $maba['sekolah_asal']; ?>" required />
            </p>
            <input type="submit" value="Update" name="update" />

        </fieldset>

    </form>

</body>
</html>
