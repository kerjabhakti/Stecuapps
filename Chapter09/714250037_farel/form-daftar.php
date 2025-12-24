<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru | ULBI</title>

    <!-- CSS disatukan -->
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #2c7be5;
            color: white;
            padding: 15px;
            text-align: center;
        }

        form {
            width: 400px;
            margin: 30px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        fieldset {
            border: none;
        }

        form p {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea,
        select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        textarea {
            resize: vertical;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            background-color: #2c7be5;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #1a68d1;
        }
    </style>
</head>
<body>

<header>
    <h3>Formulir Pendaftaran Mahasiswa Baru | ULBI</h3>
</header>

<form action="proses-daftar.php" method="POST">
    <fieldset>

        <p>
            <label>Nama:</label>
            <input type="text" name="nama" placeholder="Nama Lengkap" required>
        </p>

        <p>
            <label>Alamat:</label>
            <textarea name="alamat" required></textarea>
        </p>

        <p>
            <label>Jenis Kelamin:</label>
            <input type="radio" name="jenis_kelamin" value="laki-laki" required> Laki-laki
            <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan
        </p>

        <p>
            <label>Agama:</label>
            <select name="agama" required>
                <option value="">-- Pilih Agama --</option>
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Katolik</option>
                <option>Khonghucu</option>
            </select>
        </p>

        <p>
            <label>Sekolah Asal:</label>
            <input type="text" name="sekolah_asal" placeholder="Nama Sekolah" required>
        </p>

        <p>
            <input type="submit" name="daftar" value="Daftar">
        </p>

    </fieldset>
</form>

</body>
</html>
