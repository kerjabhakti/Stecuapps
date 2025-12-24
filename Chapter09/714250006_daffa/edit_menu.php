<?php include 'config.php';
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM menu WHERE id_menu=$_GET[id]"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Menu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Edit Menu</h2>
        <form method="post">
            <label>Nama Menu</label>
            <input type="text" name="nama" value="<?= $data['nama_menu'] ?>" required>
            <label>Harga</label>
            <input type="number" name="harga" value="<?= $data['harga'] ?>" required>
            <label>Stok</label>
            <input type="number" name="stok" value="<?= $data['stok'] ?>" required>
            <button class="btn" type="submit" name="update">Update</button>
        </form>
        <?php
        if (isset($_POST['update'])) {
            mysqli_query($conn, "UPDATE menu SET
                nama_menu='$_POST[nama]', harga='$_POST[harga]', stok='$_POST[stok]'
                WHERE id_menu=$_GET[id]");
            header("location:menu.php");
        }
        ?>
    </div>
</body>
</html>