<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk</title>

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
    </style>
</head>
<body>

<div class="container">
    <div class="container-box">
        <h2 class="mb-4">Form Tambah Produk</h2>

        <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">

            <div class="mb-3">
                <label class="form-label">ID Kategori</label>
                <input type="number" class="form-control" name="id_kategori" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Produk</label>
                <input type="text" class="form-control" name="nama_produk" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="number" class="form-control" name="harga" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Stok</label>
                <input type="number" class="form-control" name="stok" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Gambar</label>
                <input type="file" class="form-control" name="gambar" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis</label>
                <select class="form-select" name="jenis">
                    <option value="frame">Frame</option>
                    <option value="lensa">Lensa</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="form-label">Gender</label>
                <select class="form-select" name="gender">
                    <option value="pria">Pria</option>
                    <option value="wanita">Wanita</option>
                    <option value="unisex">Unisex</option>
                </select>
            </div>

            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
            <a href="list_produk.php" class="btn btn-secondary">Kembali</a>

        </form>
    </div>
</div>

</body>
</html>
