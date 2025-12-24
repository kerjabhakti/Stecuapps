<?php
require_once 'conn.php';
require_once 'karyawan.php';

if (isset($_GET['IdKaryawan'])) {
    $IdKaryawan = $_GET['IdKaryawan'];
    $SelectKaryawan = query("SELECT * FROM Karyawan WHERE IdKaryawan = '$IdKaryawan'");
} else {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
    if (edit($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Di Update');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Di Update');
                document.location.href = 'FormEdit.php?IdKaryawan=$IdKaryawan';
            </script>
        ";
    }
}
?>

<?php include 'layouts/header.php'; ?>

<main class="mt-5">
    <div class="container m-3">
        <div class="card mt-3">
            <div class="card-header">
                <h3>Edit Data Karyawan</h3>
            </div>
            <div class="card-body">
                <form method="POST">
                    <?php foreach($SelectKaryawan as $x) :?>
                    <input type="hidden" name="IdKaryawan" value="<?= $x['IdKaryawan'] ?>">
                    <div class="mb-3">
                        <label for="NamaKaryawan" class="form-label">Nama Karyawan</label>
                        <input type="text" class="form-control" id="NamaKaryawan" name="NamaKaryawan" value="<?= $x['NamaKaryawan'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="Posisi" class="form-label">Posisi</label>
                        <select name="Posisi" id="Posisi" class="form-select">
                            <option value="Penjahit" <?= $x['Posisi'] == 'Penjahit' ? 'selected' : '' ?>>Penjahit</option>
                            <option value="Packing" <?= $x['Posisi'] == 'Packing' ? 'selected' : '' ?>>Packing</option>
                            <option value="Pemotong" <?= $x['Posisi'] == 'Pemotong' ? 'selected' : '' ?>>Pemotong</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Status" class="form-label">Status</label>
                        <select name="Status" id="Status" class="form-select">
                            <option value="Aktif" <?= $x['Status'] == 'Aktif' ? 'selected' : '' ?>>Aktif</option>
                            <option value="NonAktif" <?= $x['Status'] == 'NonAktif' ? 'selected' : '' ?>>NonAktif</option>
                        </select>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                    <?php endforeach ?>
                </form>
            </div>
        </div>
    </div>