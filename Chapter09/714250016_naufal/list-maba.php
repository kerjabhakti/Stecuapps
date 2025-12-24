<?php include("config.php");?>

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
        <a href="form-daftar.php">[+] Tambah Data</a>
    </nav>

    <br>

    <table border="1">

    <thead>
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Agama</th>
            <th>Jenis Kelamin</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql="SELECT*FROM pendaftaran";
        $query=mysqli_query($db, $sql);

        while($maba = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$maba['nim']."</td>";
            echo "<td>".$maba['nama']."</td>";
            echo "<td>".$maba['agama']."</td>";
            echo "<td>".$maba['jenis kelamin']."</td>";

            echo"<td>";
            echo"<a href='form-edit.php?id=".$maba['nim']."'>Edit</a> | ";
            echo"<a href='hapus.php?id=".$maba['nim']."'>Hapus</a>";
            echo"</td>";
            echo"</tr>";  
            }
        ?>
</body>
</html>