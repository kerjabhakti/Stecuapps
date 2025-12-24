<?php include ("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru | POLTEKPOS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h3>Pendaftaran Mahasiswa Baru</h3>
    </header>

    <nav>
    <a href="form-daftar.php">[+] tambah Data</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
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
        include('config.php');
        $sql = "SELECT * FROM pendaftaran";
        $query = mysqli_query($db, $sql);

        while($maba = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$maba['id']."</td>";
            echo "<td>".$maba['nama']."</td>";
            echo "<td>".$maba['alamat']."</td>";
            echo "<td>".$maba['jenis_kelamin']."</td>";
            echo "<td>".$maba['agama']."</td>";
            echo "<td>".$maba['sekolah_asal']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$maba['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$maba['id']."'>Hapus</a> | ";
        }
    ?>
    </tbody>
    </table>
<p> Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>