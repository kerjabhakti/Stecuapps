<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Pendaftaran Mahasiswa Baru</title>

    <!-- NILAI TAMBAH: CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 1000px;
            margin: auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .top-bar {
            text-align: right;
            margin-bottom: 15px;
        }
        .btn {
            background-color: #0d6efd;
            color: #fff;
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 14px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table th {
            background-color: #0d6efd;
            color: #fff;
            padding: 10px;
        }
        table td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        table tr:hover {
            background-color: #f1f1f1;
        }
        .aksi a {
            margin-right: 8px;
            text-decoration: none;
            font-weight: bold;
        }
        .edit {
            color: #0d6efd;
        }
        .hapus {
            color: #dc3545;
        }
        .total {
            margin-top: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Pendaftaran Mahasiswa Baru</h2>
   <?php
if (isset($_GET['status']) && $_GET['status'] == 'berhasil') {
    echo "<p style='color:green; font-weight:bold;'>
        Pendaftaran mahasiswa baru ULBI berhasil!
    </p>";
}
?>
    <div class="top-bar">
        <a href="form-daftar.php" class="btn">+ Tambah Data</a>
    </div>

    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Aksi</th>
        </tr>

        <?php
        $sql = "SELECT * FROM pendaftaran ORDER BY id ASC";

       $query = mysqli_query($db, $sql);

$no = 1;
while ($maba = mysqli_fetch_assoc($query)) {

            echo "<tr>";
            echo "<td>".$no++."</td>";
            echo "<td>".$maba['nama']."</td>";
            echo "<td>".$maba['alamat']."</td>";
            echo "<td>".$maba['jenis_kelamin']."</td>";
            echo "<td>".$maba['agama']."</td>";
            echo "<td>".$maba['sekolah_asal']."</td>";
            echo "<td class='aksi'>
                    <a class='edit' href='form-edit.php?id=".$maba['id']."'>Edit</a>
                    <a class='hapus' href='hapus.php?id=".$maba['id']."'
                       onclick=\"return confirm('Yakin ingin menghapus data ini?')\">
                       Hapus
                    </a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </table>

    <div class="total">
        Total Data: <?php echo mysqli_num_rows($query); ?>
    </div>
</div>

</body>
</html>
