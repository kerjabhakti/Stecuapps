<!DOCTYPE html>
<html>
<head>
    <title>Tambah Sepatu</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<header>
    <h3>Tambah Data Sepatu</h3>
</header>

<form action="proses-tambah.php" method="POST">

<fieldset>

<p>
    <label>Nama Sepatu: </label>
    <input type="text" name="nama_sepatu" />
</p>

<p>
    <label>Merk: </label>
    <input type="text" name="merk" />
</p>

<p>
    <label>Ukuran: </label>
    <input type="text" name="ukuran" />
</p>

<p>
    <label>Warna: </label>
    <input type="text" name="warna" />
</p>

<p>
    <label>Harga: </label>
    <input type="number" name="harga" />
</p>

<p>
    <input type="submit" value="Simpan" name="simpan" />
</p>

</fieldset>
</form>

</body>
</html>
