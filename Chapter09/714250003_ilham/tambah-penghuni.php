<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Penghuni | Premium System</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <a href="index.php" class="nav-logo">
                <i class="fas fa-hotel"></i> <span>KosanPremium</span>
            </a>
            <ul class="nav-links">
                <li><a href="index.php">Beranda</a></li>
                <li><a href="data-penghuni.php">Data Penghuni</a></li>
                <li><a href="tambah-penghuni.php" class="active">Tambah Data</a></li>
            </ul>
        </div>
    </nav>

    <div class="decoration-circle"></div>
    <div class="decoration-circle-2"></div>

    <main class="container">
        <header>
            <h3><i class="fas fa-user-plus"></i> Registrasi</h3>
            <h1>Tambah Penghuni</h1>
            <p class="subtitle">Masukkan detail data penghuni baru ke dalam sistem database kosan.</p>
        </header>

        <form action="proses-tambah.php" method="POST">
            <div class="form-group">
                <label><i class="fas fa-user"></i> Nama Lengkap</label>
                <input type="text" name="nama" placeholder="Contoh: Muhammad Ilham" required>
            </div>

            <div class="form-group">
                <label><i class="fas fa-venus-mars"></i> Jenis Kelamin</label>
                <select name="gender" required>
                    <option value="" disabled selected>Pilih Gender</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label><i class="fas fa-map-marker-alt"></i> Alamat Asal</label>
                <textarea name="alamat" rows="3" placeholder="Masukkan alamat lengkap asal..." required></textarea>
            </div>

            <div class="form-group">
                <label><i class="fas fa-id-card"></i> NIK (Nomor Induk Kependudukan)</label>
                <input type="number" name="nik" placeholder="16 digit angka NIK" required>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-save">
                    <i class="fas fa-save"></i> Simpan Data
                </button>
                <a href="data-penghuni.php" class="btn-cancel">Batal</a>
            </div>
        </form>
    </main>
</body>
</html>