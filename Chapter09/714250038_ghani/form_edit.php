<?php
include "config.php";

if(!isset($_GET['id'])){
    die("ID tidak ditemukan!");
}

$id = $_GET['id'];
$sql = "SELECT * FROM produk WHERE id_produk = $id";
$query = mysqli_query($db, $sql);
$produk = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background: #f7f7f7; }
        .container-box {
            background: white;
            padding: 25px;
            border-radius: 10px;
            margin-top: 40px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }
        img { border: 1px solid #ddd; padding: 3px; border-radius: 5px; }
    </style>
</head>
<body>

<div class="container">
    <div class="container-box">
        <h2 class="mb-4">Edit Produk</h2>

        <form action="proses_edit.php" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="id_produk" value="<?= $produk['id_produk']; ?>">

            <div class="mb-3">
                <label class="form-label">ID Kategori</label>
                <input type="number" class="form-control" name="id_kategori" value="<?= $produk['id_kategori']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Produk</label>
                <input type="text" class="form-control" name="nama_produk" value="<?= $produk['nama_produk']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="number" class="form-control" name="harga" value="<?= $produk['harga']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Stok</label>
                <input type="number" class="form-control" name="stok" value="<?= $produk['stok']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" rows="4" required><?= $produk['deskripsi']; ?></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Gambar Lama:</label><br>
                <img src="img/<?= $produk['gambar']; ?>" width="140">
            </div>

            <div class="mb-3">
                <label class="form-label">Ganti Gambar (opsional)</label>
                <input type="file" class="form-control" name="gambar">
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis</label>
                <select name="jenis" class="form-select">
                    <option value="frame" <?= $produk['jenis']=='frame' ? 'selected' : '' ?>>Frame</option>
                    <option value="lensa" <?= $produk['jenis']=='lensa' ? 'selected' : '' ?>>Lensa</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="form-label">Gender</label>
                <select name="gender" class="form-select">
                    <option value="pria" <?= $produk['gender']=='pria' ? 'selected' : '' ?>>Pria</option>
                    <option value="wanita" <?= $produk['gender']=='wanita' ? 'selected' : '' ?>>Wanita</option>
                    <option value="unisex" <?= $produk['gender']=='unisex' ? 'selected' : '' ?>>Unisex</option>
                </select>
            </div>

            <button type="submit" name="simpan" class="btn btn-primary">Simpan Perubahan</button>
            <a href="list_produk.php" class="btn btn-secondary">Kembali</a>

        </form>
    </div>
</div>

</body>
</html>
