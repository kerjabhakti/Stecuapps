<?php include "config.php"; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>OPTIKKU - Data Produk</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background: #f5f6fa; }
        .table-img {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 6px;
        }
        .top-box {
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin-top: 25px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>

<div class="container">

    <div class="top-box">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Data Produk Toko Kacamata</h2>
            <a href="form_tambah.php" class="btn btn-primary">+ Tambah Produk</a>
        </div>

        <table class="table table-bordered table-striped mt-3">
            <thead class="table-dark">
                <tr>
                    <th>ID Produk</th>
                    <th>ID Kategori</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Jenis</th>
                    <th>Gender</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                $sql = "SELECT * FROM produk";
                $query = mysqli_query($db, $sql);

                while ($produk = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?= $produk['id_produk'] ?></td>
                        <td><?= $produk['id_kategori'] ?></td>
                        <td><?= $produk['nama_produk'] ?></td>
                        <td>Rp <?= number_format($produk['harga'], 0, ',', '.') ?></td>
                        <td><?= $produk['stok'] ?></td>
                        <td><?= $produk['deskripsi'] ?></td>

                        <td>
                            <img src="img/<?= $produk['gambar'] ?>" class="table-img" alt="gambar produk">
                        </td>

                        <td><?= ucfirst($produk['jenis']) ?></td>
                        <td><?= ucfirst($produk['gender']) ?></td>

                        <td class="text-center">
                            <a href="form_edit.php?id=<?= $produk['id_produk'] ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="hapus.php?id=<?= $produk['id_produk'] ?>" 
                               class="btn btn-sm btn-danger"
                               onclick="return confirm('Yakin ingin menghapus produk ini?');">
                               Hapus
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <p class="mt-2"><strong>Total Produk: <?= mysqli_num_rows($query) ?></strong></p>

    </div>
</div>

</body>
</html>
