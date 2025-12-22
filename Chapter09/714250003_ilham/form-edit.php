<?php
include("config.php");

// 1. Cek apakah ada NIK di URL
if( !isset($_GET['nik']) ){
    // Jika tidak ada, balikkan ke halaman daftar, bukan ke proses-edit
    header('Location: data-penghuni.php');
    exit;
}

$nik_lama = $_GET['nik'];

// 2. Gunakan tanda petik '$nik_lama' agar query terbaca dengan benar
$sql = "SELECT * FROM penghuni WHERE NIK='$nik_lama'";
$query = mysqli_query($db, $sql);
$penghuni = mysqli_fetch_assoc($query);

// 3. Cek apakah data ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("Data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h3>Edit Data Penghuni</h3>
    <form action="proses-edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="nik_lama" value="<?php echo $penghuni['NIK'] ?>" />
            
            <p>
                <label>Nama: </label>
                <input type="text" name="nama" value="<?php echo $penghuni['NAMA'] ?>" />
            </p>
            
            <p>
                <label>Jenis Kelamin: </label>
                <input type="radio" name="jenis_kelamin" value="Laki-Laki" <?php echo ($penghuni['JENISKELAMIN'] == 'Laki-Laki') ? "checked": "" ?>> Laki-laki
                <input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($penghuni['JENISKELAMIN'] == 'Perempuan') ? "checked": "" ?>> Perempuan
            </p>
            
            <p>
                <label>Alamat: </label>
                <textarea name="alamat"><?php echo $penghuni['ALAMATASAL'] ?></textarea>
            </p>
            
            <p>
                <label>NIK Baru: </label>
                <input type="text" name="nik" value="<?php echo $penghuni['NIK'] ?>" />
            </p>
            
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>
        </fieldset>
    </form>
</body>
</html>