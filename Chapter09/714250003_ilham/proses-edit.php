<?php
include("config.php");

if(isset($_POST['simpan'])){
    // Ambil data dari form
    $nik_lama = $_POST['nik_lama'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $nik_baru = $_POST['nik'];

    // PERBAIKAN: Gunakan tanda petik satu ('') untuk semua variabel string/teks
    // NIK biasanya bertipe VARCHAR/String, jadi WAJIB pakai tanda petik
    $sql = "UPDATE penghuni SET 
            NAMA='$nama', 
            JENISKELAMIN='$jk', 
            ALAMATASAL='$alamat', 
            NIK='$nik_baru' 
            WHERE NIK='$nik_lama'";

    $query = mysqli_query($db, $sql);

    if( $query ) {
        // Jika berhasil, alihkan ke halaman daftar (sesuaikan namanya)
        header('Location: data-penghuni.php?status=sukses');
    } else {
        // Menampilkan pesan error spesifik jika gagal
        die("Gagal menyimpan perubahan. Error: " . mysqli_error($db));
    }
} else {
    die("Akses dilarang...");
}
?>