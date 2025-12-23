<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa | POLTEKPOS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h3>Edit Data Mahasiswa</h3>
    </header>

    <?php
    include("config.php");

    // Ambil ID dari URL
    $id = $_GET['id'];

    // Query untuk mengambil data mahasiswa berdasarkan ID
    $sql = "SELECT * FROM pendaftaran WHERE nim = $id";
    $query = mysqli_query($db, $sql);
    $maba = mysqli_fetch_assoc($query);

    // Jika data tidak ditemukan
    if (!$maba) {
        die("Data tidak ditemukan.");
    }
    ?>

    <form action="proses-edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="nim" value="<?php echo $maba['nim']; ?>" />

            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $maba['nama']; ?>" required />
            </p>
            <p>
                <label for="agama">Agama: </label>
                <select name="agama" required>
                    <option value="Islam" <?php if($maba['agama'] == 'Islam') echo 'selected'; ?>>Islam</option>
                    <option value="Kristen" <?php if($maba['agama'] == 'Kristen') echo 'selected'; ?>>Kristen</option>
                    <option value="Hindu" <?php if($maba['agama'] == 'Hindu') echo 'selected'; ?>>Hindu</option>
                    <option value="Budha" <?php if($maba['agama'] == 'Budha') echo 'selected'; ?>>Budha</option>
                    <option value="Atheis" <?php if($maba['agama'] == 'Atheis') echo 'selected'; ?>>Atheis</option>
                </select>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <label><input type="radio" name="jenis_kelamin" value="pria" <?php if($maba['jenis kelamin'] == 'pria') echo 'checked'; ?>> Pria</label>
                <label><input type="radio" name="jenis_kelamin" value="wanita" <?php if($maba['jenis kelamin'] == 'wanita') echo 'checked'; ?>> Wanita</label>
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>
        </fieldset>
    </form>

    <nav>
        <a href="list-maba.php">Kembali ke Daftar Mahasiswa</a>
    </nav>
</body>
</html>
