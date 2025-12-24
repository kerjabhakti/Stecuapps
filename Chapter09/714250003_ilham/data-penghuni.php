<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Penghuni | Premium System</title>
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
                <li><a href="index.php">Beranda</a></li>
                <li><a href="data-penghuni.php" class="active">Data Penghuni</a></li>
                <li><a href="tambah-penghuni.php">Tambah Data</a></li>
            </ul>
        </div>
    </nav>

    <div class="decoration-circle"></div>
    <div class="decoration-circle-2"></div>

    <main class="container container-table">
        <header>
            <h3><i class="fas fa-database"></i> Database Kosan</h3>
            <h1>Daftar Penghuni</h1>
            <p class="subtitle">Kelola dan pantau data penghuni kos Anda dengan tampilan yang lebih rapi.</p>
        </header>

        <div class="table-actions">
            <a href="tambah-penghuni.php" class="btn-add-table">
                <i class="fas fa-plus"></i> Tambah Penghuni
            </a>
            <a href="index.php" class="btn-back">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Nama Lengkap</th>
                        <th>Gender</th>
                        <th>Alamat Asal</th>
                        <th>NIK</th>
                        <th style="text-align: center;">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="td-name">Rifki</td>
                        <td>Laki-Laki</td>
                        <td>Palembang</td>
                        <td><code>121345</code></td>
                        <td>
                            <div class="action-links">
                                <a href="#" class="link-edit"><i class="fas fa-edit"></i> Edit</a>
                                <a href="#" class="link-delete"><i class="fas fa-trash"></i> Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="td-name">Muhammad Ilham Haiballah</td>
                        <td>Laki-Laki</td>
                        <td>Bangkok</td>
                        <td><code>714250003</code></td>
                        <td>
                            <div class="action-links">
                                <a href="#" class="link-edit"><i class="fas fa-edit"></i> Edit</a>
                                <a href="#" class="link-delete"><i class="fas fa-trash"></i> Hapus</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <footer>
            <p>Total Penghuni: <strong>2 Orang</strong> | Luxury System v1.0</p>
        </footer>
    </main>
</body>
</html>