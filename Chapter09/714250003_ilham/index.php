<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Kosan | Premium Management</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <nav class="navbar">
        <div class="nav-container">
            <a href="index.php" class="nav-logo">
                <i class="fas fa-hotel"></i> <span>KosanPremium</span>
            </a>
            <ul class="nav-links">
                <li><a href="index.php" class="active">Beranda</a></li>
                <li><a href="data-penghuni.php">Data Penghuni</a></li>
                <li><a href="tambah-penghuni.php">Tambah Data</a></li>
            </ul>
            <div class="nav-user">
                <i class="fas fa-user-circle"></i> Admin
            </div>
        </div>
    </nav>

    <div class="decoration-circle"></div>
    <div class="decoration-circle-2"></div>

    <main class="container">
        <header>
            <div class="brand-badge">Dashboard Utama</div>
            <h1>Manajemen Data Penghuni</h1>
            <p class="subtitle">Kelola data penghuni kos Anda dengan lebih mudah, cepat, dan profesional.</p>
        </header>

        <?php if(isset($_GET['status'])): ?>
            <div class="status-alert <?php echo ($_GET['status'] == 'sukses') ? 'alert-success' : 'alert-error'; ?>">
                <div class="alert-icon">
                    <i class="fas <?php echo ($_GET['status'] == 'sukses') ? 'fa-check-circle' : 'fa-exclamation-circle'; ?>"></i>
                </div>
                <div class="alert-content">
                    <span><?php echo ($_GET['status'] == 'sukses') ? 'Berhasil!' : 'Gagal!'; ?></span>
                    <p><?php echo ($_GET['status'] == 'sukses') ? 'Proses data telah berhasil dilakukan.' : 'Terjadi kendala pada sistem.'; ?></p>
                </div>
            </div>
        <?php endif; ?>

        <nav class="menu-nav">
            <a href="tambah-penghuni.php" class="btn-main">
                <div class="btn-icon icon-add"><i class="fas fa-user-plus"></i></div>
                <div class="btn-text">
                    <span class="title">Tambah Penghuni</span>
                    <span class="desc">Input data penghuni baru</span>
                </div>
                <i class="fas fa-chevron-right arrow"></i>
            </a>
            
            <a href="data-penghuni.php" class="btn-main">
                <div class="btn-icon icon-list"><i class="fas fa-users"></i></div>
                <div class="btn-text">
                    <span class="title">Daftar Penghuni</span>
                    <span class="desc">Lihat dan kelola database</span>
                </div>
                <i class="fas fa-chevron-right arrow"></i>
            </a>
        </nav>

        <footer>
            <div class="footer-line"></div>
            <p>&copy; 2023 Luxury Management System. Status: <span class="status-online">● Terhubung</span></p>
        </footer>
    </main>

</body>
</html>