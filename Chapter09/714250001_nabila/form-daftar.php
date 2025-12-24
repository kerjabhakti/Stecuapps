<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Barista Café</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Pendaftaran Barista Café</h2>

<div class="card">
<form action="proses-pendaftaran.php" method="post">

    <label>Nama Lengkap</label>
    <input type="text" name="nama" required>

    <label>Alamat</label>
    <textarea name="alamat" required></textarea>

    <label>Jenis Kelamin</label>
    <select name="jenis_kelamin" required>
        <option value="">-- Pilih --</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>

    <label>Posisi</label>
    <input type="text" name="posisi" value="Barista" required>

    <label>Pengalaman</label>
    <textarea name="pengalaman" required></textarea>

    <button type="submit" name="daftar">Daftar</button>

</form>
</div>

</body>
</html>
