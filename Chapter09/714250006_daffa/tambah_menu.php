<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Menu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Tambah Menu</h2>
        <form method="post">
            <label>Nama Menu</label>
            <input type="text" name="nama" required>
            <label>Harga</label>
            <input type="number" name="harga" required>
            <label>Stok</label>
            <input type="number" name="stok" required>
            <button class="btn" type="submit" name="simpan">Simpan</button>
            <a class="btn" href="menu.php">Kembali</a>
        </form>
        <?php
        if (isset($_POST['simpan'])) {
            mysqli_query($conn, "INSERT INTO menu (nama_menu, harga, stok)
                VALUES ('$_POST[nama]', '$_POST[harga]', '$_POST[stok]')");
            header("location:menu.php");
        }
        ?>
    </div>
</body>
</html>