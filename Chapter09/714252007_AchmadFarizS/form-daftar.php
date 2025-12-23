<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pendaftaran Mahasiswa Baru</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
        }
        h2 {
            text-align: center;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        input, textarea, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }
        .btn {
            margin-top: 15px;
            background: #0d6efd;
            color: #fff;
            padding: 10px;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        .back {
            display: block;
            margin-top: 15px;
            text-align: center;
        }
    </style>

    <script>
        function validasi() {
            if (document.forms["formDaftar"]["nama"].value == "") {
                alert("Nama wajib diisi");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>

<div class="container">
    <h2>Form Pendaftaran</h2>

    <form name="formDaftar" action="proses-pendaftaran.php" method="POST" onsubmit="return validasi();">
        <label>Nama</label>
        <input type="text" name="nama">

        <label>Alamat</label>
        <textarea name="alamat"></textarea>

        <label>Jenis Kelamin</label>
        <select name="jenis_kelamin">
            <option value="">-- Pilih --</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>

        <label>Agama</label>
        <input type="text" name="agama">

        <label>Sekolah Asal</label>
        <input type="text" name="sekolah_asal">

        <button type="submit" name="daftar" class="btn">Simpan</button>

    </form>

    <a href="list-maba.php" class="back">← Kembali ke Data</a>
</div>

</body>
</html>
