<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Menu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Daftar Menu Cafe</h2>
        <table>
            <tr>
                <th>Nama Menu</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
            <?php
            $data = mysqli_query($conn, "SELECT * FROM menu");
            while ($row = mysqli_fetch_assoc($data)) {
                echo "<tr>";
                echo "<td>{$row['nama_menu']}</td>";
                echo "<td>Rp {$row['harga']}</td>";
                echo "<td>{$row['stok']}</td>";
                echo "<td>
                    <a class='btn' href='edit_menu.php?id={$row['id_menu']}'>Edit</a>
                    <a class='btn' href='hapus_menu.php?id={$row['id_menu']}'>Hapus</a>
                </td>";
                echo "</tr>";
            }
            ?>
        </table> 
        <a class="btn" href="tambah_menu.php">Tambah Menu</a>
        <a class="btn" href="index.php">Kembali</a>
    </div>
</body>
</html>