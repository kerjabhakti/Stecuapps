<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru ULBI</title>
    <link rel="stylesheet" href="tampilan.css">
</head>
<body>
    <header>
        <h3>Pendaftaran Mahasiswa Baru ULBI</h3>
        <h1>Universitas Logistik dan Bisnis Internasional</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar</a></li>
            <li><a href="list-maba.php">Pendaftar</a></li>
        </ul>
    </nav>

   <?php
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'sukses') {
        echo "<p>Pendaftaran Mahasiswa Baru ULBI berhasil!</p>";
    } else {
        echo "<p>Pendaftaran Mahasiswa Baru ULBI gagal!</p>";
    }
}

if (isset($_GET['error'])) {
    echo "<p style='color:red'>";
    switch ($_GET['error']) {
        case 'nama':
            echo "Nama tidak boleh kosong.";
            break;
        case 'alamat':
            echo "Alamat tidak boleh kosong.";
            break;
        case 'jk':
            echo "Silakan pilih jenis kelamin.";
            break;
        case 'agama':
            echo "Silakan pilih agama.";
            break;
        case 'sekolah':
            echo "Sekolah asal tidak boleh kosong.";
            break;
        case 'db':
            echo "Terjadi kesalahan saat menyimpan data.";
            break;
        default:
            echo "Terjadi kesalahan.";
    }
    echo "</p>";
}
?>

</body>
</html>