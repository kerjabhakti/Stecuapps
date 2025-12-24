<?php
include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftar | POLTEKPOS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h3>Mahasiswa yang Sudah Mendaftar</h3></header>
    <nav><a href="form-daftar.php">[+] Tambah Baru</a></nav>
    <table>
        <thead>
            <tr>
                <th>No</th><th>Nama</th><th>Alamat</th><th>Jenis Kelamin</th><th>Agama</th><th>Sekolah</th><th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM mahasiswabaru";
            $query = mysqli_query($db, $sql);
            while($maba = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$maba['id']."</td>";
                echo "<td>".$maba['nama']."</td>";
                echo "<td>".$maba['alamat']."</td>";
                echo "<td>".$maba['jenis_kelamin']."</td>";
                echo "<td>".$maba['agama']."</td>";
                echo "<td>".$maba['sekolah asal']."</td>";
                echo "<td><a href='form-edit.php?id=".$maba['id']."'>Edit</a> | <a href='hapus.php?id=".$maba['id']."'>Hapus</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>