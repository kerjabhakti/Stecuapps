<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h3>Pendaftaran Mahasiswa Baru</h3>
</header>

<nav>
    <a href="form-daftar.php">[+] Tambah data</a>
</nav>

<br>

<!-- WRAPPER AGAR TABEL KE TENGAH -->
<div class="table-wrapper">

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Asal Sekolah</th>
                <th>Tindakan</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $sql = "SELECT * FROM pendaftaran";
            $query = mysqli_query($db, $sql);

            while ($maba = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>".$maba['id']."</td>";
                echo "<td>".$maba['nama']."</td>";
                echo "<td>".$maba['alamat']."</td>";
                echo "<td>".$maba['jenis_kelamin']."</td>";
                echo "<td>".$maba['agama']."</td>";
                echo "<td>".$maba['sekolah asal']."</td>";
                echo "<td>
                        <a href='form-edit.php?id=".$maba['id']."'>Edit</a> |
                        <a href='hapus.php?id=".$maba['id']."'>Hapus</a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</div>

</body>
</html>
