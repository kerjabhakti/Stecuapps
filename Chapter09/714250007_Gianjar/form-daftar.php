<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru | POLTEKPOS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h3>Formulir Pendaftaran Mahasiswa Baru | POLTEKPOS</h3>
</header>

<form action="proses-daftar.php" method="POST">
    <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" required />
        </p>

        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat" required></textarea>
        </p>

        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label>
                <input type="radio" name="jenis_kelamin" value="Laki-laki" required>
                Laki-laki
            </label>
            <label>
                <input type="radio" name="jenis_kelamin" value="Perempuan">
                Perempuan
            </label>
        </p>

        <p>
            <label for="agama">Agama: </label>
            <select name="agama" required>
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Buddha</option>
                <option>Atheis</option>
            </select>
        </p>

        <p>
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" placeholder="nama sekolah" required />
        </p>

        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

    </fieldset>
</form>
<p><a href="index.php">Kembali ke Halaman Utama</a></p>

</body>
</html>