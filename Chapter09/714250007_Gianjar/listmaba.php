<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Pendaftar Mahasiswa Baru</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h3>Data Pendaftar Mahasiswa Baru</h3>
</header>

<div class="nav">
    <a href="form-daftar.php">+ Tambah Data</a>
</div>

<!-- Pesan sukses / gagal -->
<?php if (isset($_GET['status'])): ?>
    <?php if ($_GET['status'] == 'sukses'): ?>
        <div class="alert success">
             Data berhasil disimpan!
        </div>
    <?php elseif ($_GET['status'] == 'gagal'): ?>
        <div class="alert error">
             Data gagal disimpan!
        </div>
    <?php endif; ?>
<?php endif; ?>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM pendaftaran";
        $query = mysqli_query($db, $sql);

        $no = 1;
        while ($row = mysqli_fetch_assoc($query)) {
            echo "<tr>";
            echo "<td>".$no++."</td>";
            echo "<td>".$row['nama']."</td>";
            echo "<td>".$row['alamat']."</td>";
            echo "<td>".$row['jenis_kelamin']."</td>";
            echo "<td>".$row['agama']."</td>";
            echo "<td>".$row['sekolah_asal']."</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<p style="text-align:center;">
    Total Pendaftar: <strong><?php echo mysqli_num_rows($query); ?></strong>
</p>
<p><a href="index.php">Kembali ke Halaman Utama</a></p>

</body>
</html>
