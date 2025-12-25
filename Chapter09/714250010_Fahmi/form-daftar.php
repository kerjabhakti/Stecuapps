<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran | POLTEKPOS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h3>Formulir Pendaftaran Mahasiswa Baru</h3></header>
    <form action="proses-daftar.php" method="POST">
        <fieldset>
            <p><label>Nama:</label> <input type="text" name="nama" placeholder="Nama lengkap" required /></p>
            <p><label>Alamat:</label> <textarea name="alamat" required></textarea></p>
            <p><label>Jenis Kelamin:</label>
                <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki
                <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan
            </p>
            <p><label>Agama:</label>
                <select name="agama">
                    <option>Islam</option><option>Kristen</option><option>Hindu</option><option>Budha</option>
                </select>
            </p>
            <p><label>Sekolah Asal:</label> <input type="text" name="sekolah_asal" placeholder="Nama sekolah" required /></p>
            <p><input type="submit" value="Daftar" name="daftar" /></p>
        </fieldset>
    </form>
</body>
</html>