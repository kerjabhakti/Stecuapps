<?php 
include 'layouts/header.php';
require_once 'karyawan.php';

// tambah karyawan
if(isset($_POST['tambah'])) {
    if(tambah($_POST) > 0) {
        echo "<script>alert('Data berhasil ditambahkan!');window.location='index.php';</script>";
    } else {
        echo "<script>alert('Data gagal ditambahkan!');</script>";
    }
}

// hapus karyawan
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    if (hapus($id) > 0) {
        echo "<script>alert('Data berhasil dihapus!');window.location='index.php';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus!');</script>";
    }
}
?>

<main class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card mt-3">
                    <div class="card-header bg-warning">
                        <h3>Data Karyawan</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Nama Karyawan</th>
                                <th>Posisi</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                            <?php foreach($SelectKaryawan as $x) :?>
                                <tr>
                                    <td><?= $x['NamaKaryawan'] ?></td>
                                    <td><?= $x['Posisi'] ?></td>
                                    <td><?= $x['Status'] ?></td>
                                    <td>
                                        <a href="FormEdit.php?IdKaryawan=<?= $x['IdKaryawan'] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="index.php?hapus=<?= $x['IdKaryawan'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Yakin Akan Di Hapus?')"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach ?>    
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">Tambah Karyawan</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="mb-3">
                                <label for="NamaKaryawan" class="form-label">Nama Karyawan</label>
                                <input type="text" class="form-control" id="NamaKaryawan" name="NamaKaryawan" required>
                            </div>
                            <div class="mb-3">
                                <label for="Posisi" class="form-label">Posisi</label>
                                <select class="form-select" id="Posisi" name="Posisi" required>
                                    <option value="Penjahit">Penjahit</option>
                                    <option value="Packing">Packing</option>
                                    <option value="Pemotong">Pemotong</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="Status" class="form-label">Status</label>
                                <select class="form-select" id="Status" name="Status" required>
                                    <option value="Aktif">Aktif</option>
                                    <option value="NonAktif">NonAktif</option>
                                </select>
                            </div>
                            <button type="submit" name="tambah" class="btn btn-success w-100">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
