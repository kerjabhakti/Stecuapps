<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru | ULBI</title>
    <link rel="stylesheet" href="tampilan.css">
</head>
<body>
    <header>
        <h3>Pendaftaran Mahasiswa Baru</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Data</a>
    </nav>
<br>

<table border="1" id="tabelMaba">
<thead>
    <tr>
        <th>id</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Sekolah Asal</th>
        <th>Aksi</th>
    </tr>
</thead>
<tbody>
    <?php
    $sql = "SELECT * FROM pendaftaran";
    $query = mysqli_query($db, $sql);

    if (!$query) {
    die("Query error: " . mysqli_error($db));
    }
    
    while($maba = mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>".$maba['id']."</td>";
        echo "<td>".$maba['Nama']."</td>";
        echo "<td>".$maba['Alamat']."</td>";
        echo "<td>".$maba['Jenis_kelamin']."</td>";
        echo "<td>".$maba['Agama']."</td>";
        echo "<td>".$maba['Sekolah_asal']."</td>";

        echo "<td>";
        echo "<a href='form-edit.php?id=".$maba['id']."'>Edit</a> | ";
        echo "<a href='hapus.php?id=".$maba['id']."'>Hapus</a>";
        echo "</td>";
        echo "</tr>";
        }

    ?>
    </tbody>
    </table>

<script src="script.js"></script>
</body>
</html>