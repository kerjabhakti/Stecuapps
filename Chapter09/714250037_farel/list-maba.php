<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru | ULBI</title>

    <!-- CSS disatukan -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background-color: #f2f4f7;
            color: #333;
            padding: 20px;
        }

        header {
            background: linear-gradient(135deg, #2c7be5, #1a68d1);
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        nav {
            margin-bottom: 20px;
            text-align: right;
        }

        nav a {
            background-color: #2c7be5;
            color: white;
            text-decoration: none;
            padding: 10px 16px;
            border-radius: 5px;
            font-weight: 600;
        }

        nav a:hover {
            background-color: #1a68d1;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        }

        thead {
            background-color: #2c7be5;
            color: white;
        }

        th, td {
            padding: 12px 14px;
            text-align: center;
        }

        tbody tr:nth-child(even) {
            background-color: #f8f9fb;
        }

        tbody tr:hover {
            background-color: #eef3ff;
        }

        td a {
            text-decoration: none;
            font-weight: 600;
            margin: 0 5px;
        }

        td a[href*="edit"] {
            color: #28a745;
        }

        td a[href*="hapus"] {
            color: #dc3545;
        }

        p {
            margin-top: 15px;
            font-weight: 600;
        }

        @media (max-width: 768px) {
            table {
                font-size: 14px;
            }

            nav {
                text-align: center;
            }
        }
    </style>
</head>
<body>

<header>
    <h3>Pendaftaran Mahasiswa Baru</h3>
</header>

<nav>
    <a href="form-daftar.php">+ Tambah Data</a>
</nav>

<table>
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
        $sql = "SELECT * FROM mahasiswabaru";
        $query = mysqli_query($db, $sql);

        while ($maba = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>".$maba['id']."</td>";
            echo "<td>".$maba['nama']."</td>";
            echo "<td>".$maba['alamat']."</td>";
            echo "<td>".$maba['jenis_kelamin']."</td>";
            echo "<td>".$maba['agama']."</td>";
            echo "<td>".$maba['sekolah_asal']."</td>";
            echo "<td>
                    <a href='form-edit.php?id=".$maba['id']."'>Edit</a> |
                    <a href='hapus.php?id=".$maba['id']."'>Hapus</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<p>Total Data: <?php echo mysqli_num_rows($query); ?></p>

</body>
</html>