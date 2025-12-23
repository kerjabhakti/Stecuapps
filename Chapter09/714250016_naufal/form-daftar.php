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
        <h3>Formulir Pendaftaran Mahasiswa ULBI</h3>
    </header>

    <form action="proses-daftar.php" method="POST">
        <fieldset>
        <!-- <p>
            <label for="nim">Nim: </label>
            <input type="text" name="nim" placeholder="nim" />
        </p> -->
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>

            <label><input type="radio" name="jenis_kelamin" value="pria"> Pria</label>
            <label><input type="radio" name="jenis_kelamin" value="wanita"> Wanita</label>
        </p>
        <p>
            <input type="submit" value="daftar" name="daftar" />
        </p>
        </fieldset>
</body>
</html>