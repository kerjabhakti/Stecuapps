<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Warung AAS</title>
    <style>
        body { font-family: Arial; margin: 20px; } /* Ganti font dan beri jarak tepi */
        table { width: 100%; border-collapse: collapse; } /* Tabel memenuhi layar & garis menyatu */
        th, td { border: 1px solid black; padding: 10px; text-align: left; } /* Garis sel & jarak tulisan */
        th { background-color: #f2f2f2; } /* Warna abu muda untuk judul kolom */
        .btn-tambah { text-decoration: none; background: blue; color: white; padding: 5px; border-radius: 3px; }
    </style>
</head>
<body>
    <h2>Daftar Menu Warung AAS</h2>
    <a href="form-daftar.php" class="btn-tambah">+ Tambah Menu</a>
    <br><br>

    <table>
        <thead>
            <tr>
                <th>Menu</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>WA</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Penjelasan Logika:
            // 1. Ambil semua data dari tabel 'warungaas'
            $sql = "SELECT * FROM warungaas";
            $query = mysqli_query($db, $sql);

            // 2. Gunakan perulangan while untuk menampilkan baris demi baris
            while($item = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$item['menu']."</td>";
                echo "<td>".$item['harga']."</td>";
                echo "<td>".$item['deskripsi']."</td>";
                echo "<td>".$item['nomerwa']."</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>