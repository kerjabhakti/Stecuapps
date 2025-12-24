<!DOCTYPE html>
<html>
<head>
    <title>Input Menu</title>
    <style>
        label { display: block; margin-top: 10px; } /* Label muncul di baris baru */
        input, textarea { width: 300px; padding: 5px; } /* Kotak input lebih lebar */
        button { margin-top: 15px; cursor: pointer; } /* Tombol dengan kursor jari */
    </style>
</head>
<body>
    <h2>Tambah Menu Baru</h2>
    <form action="proses-pendaftaran.php" method="POST">
        <label>Nama Menu:</label>
        <input type="text" name="menu" required>

        <label>Harga:</label>
        <input type="text" name="harga" required>

        <label>Deskripsi:</label>
        <textarea name="deskripsi"></textarea>

        <label>Nomer WA:</label>
        <input type="text" name="nomerwa" required>

        <br>
        <button type="submit" name="simpan">Simpan Menu</button>
    </form>
</body>
</html>