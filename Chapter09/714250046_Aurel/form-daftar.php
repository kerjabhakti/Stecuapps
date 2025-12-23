<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru | ULBI </title>
    <link rel="stylesheet" href="tampilan.css">
</head>
<body>
    <header>
        <h3>Pendaftaran Mahasiswa Baru | ULBI</h3>
    </header>

    <form action="proses-daftar.php" method="POST">
        <fieldset>
            <p>
                <label for="Nama">Nama: </label>
                <input type="text" name="Nama" placeholder="Nama Lengkap" />
            </p>
            <p>
                <label for="Alamat">Alamat: </label>
                <textarea name="Alamat"></textarea>
            </p>
            <p>
                <label for="Jenis_kelamin">Jenis Kelamin: </label>
                <label><input type="radio" name="Jenis_kelamin" value="laki-laki"> Laki-laki</label>
                <label><input type="radio" name="Jenis_kelamin" value="perempuan"> Perempuan</label>
            </p>
            <p>
                <label for="Agama">Agama: </label>
                <select name="Agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Atheis</option>
                </select>
            </p>
            <p>
                <label for="Sekolah_asal">Sekolah Asal: </label>
                <input type="text" name="Sekolah_asal" placeholder="Nama Sekolah" />
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar" />
            </p>
        </fieldset>

</body>
</html>