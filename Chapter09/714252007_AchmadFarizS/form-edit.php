<?php
include("config.php");

// ambil id dari URL
if (!isset($_GET['id'])) {
    die("ID tidak ditemukan");
}

$id = $_GET['id'];

// ambil data berdasarkan id
$sql = "SELECT * FROM pendaftaran WHERE id=$id";
$query = mysqli_query($db, $sql);
$maba = mysqli_fetch_assoc($query);

if (!$maba) {
    die("Data tidak ditemukan");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Mahasiswa</title>

    <!-- NILAI TAMBAH: CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
        }
        h2 {
            text-align: center;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        input, textarea, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }
        .btn {
            margin-top: 15px;
            background: #198754;
            color: #fff;
            padding: 10px;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        .back {
            display: block;
            margin-top: 15px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Edit Data Mahasiswa</h2>

    <form action="proses-edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $maba['id']; ?>">

        <label>Nama</label>
        <input type="text" name="nama" value="<?php echo $maba['nama']; ?>">

        <label>Alamat</label>
        <textarea name="alamat"><?php echo $maba['alamat']; ?></textarea>

        <label>Jenis Kelamin</label>
        <select name="jenis_kelamin">
            <option value="Laki-laki" <?php if($maba['jenis_kelamin']=="Laki-laki") echo "selected"; ?>>Laki-laki</option>
            <option value="Perempuan" <?php if($maba['jenis_kelamin']=="Perempuan") echo "selected"; ?>>Perempuan</option>
        </select>

        <label>Agama</label>
        <input type="text" name="agama" value="<?php echo $maba['agama']; ?>">

        <label>Sekolah Asal</label>
        <input type="text" name="sekolah_asal" value="<?php echo $maba['sekolah_asal']; ?>">

        <button type="submit" class="btn">Update Data</button>
    </form>

    <a href="list-maba.php" class="back">← Kembali ke Data</a>
</div>

</body>
</html>
