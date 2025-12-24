<?php
require_once 'karyawan.php';

$editData = null;

if (isset($_GET["edit"])) {
  $id = $_GET["edit"];
  $editData = query("SELECT * FROM Karyawan WHERE IdKaryawan = $id")[0];
}

if (isset($_POST["edit"])) {
  if (edit($_POST) > 0) {
    echo "<script>alert('Berhasil diedit');
    document.location.href = 'index.php';
    </script>";
  } else {
    echo "<script>alert('Gagal diedit');</script>";
  }
}

if(isset($_POST["submit"])) {
  if(tambah($_POST) > 0) {
    echo "<script>alert ('berhasil');
    document.location.href = 'index.php';
    </script>";
  } else {
    echo "<script>alert('Gagal');</script>";
  }
}

if (isset($_GET["hapus"])) {
  $id = $_GET["hapus"];
  if (hapus($id) > 0) {
    echo "<script>alert('Berhasil dihapus');
    document.location.href = 'index.php';
    </script>";
  } else {
    echo "<script>alert('Gagal dihapus');
    </script>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konveksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
   <div class="container mt-5">
      <h1 class="text-center mb-4">Data Karyawan</h1>

    <div class="card mb-4">
        <div class="card-header">
          <h3>Daftar Karyawan</h3>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Karyawan</th>
                <th>Posisi</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              <?php foreach ($SelectKaryawan as $x) : ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $x['NamaKaryawan']; ?></td>
                  <td><?= $x['Posisi']; ?></td>
                  <td><?= $x['Status']; ?></td>
                  <td>
                    <a href="?edit=<?= $x['IdKaryawan']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="?hapus=<?= $x['IdKaryawan']; ?>" class="btn btn-danger btn-sm" onclick="return confirmDelete()">Hapus</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          <h4>Tambah Karyawan Baru</h4>
        </div>
        <div class="card=body">
          <form action="" method="post">
            <div class="mb-3">
              <label for="NamaKaryawan" class="form-label">Nama Karyawan</label>
              <input type="text" class="form-control" id="NamaKaryawan" name="NamaKaryawan" value="<?= $editData['NamaKaryawan'] ?? ''; ?>" required>
              <input type="hidden" name="IdKaryawan" value="<?= $editData['IdKaryawan'] ?? ''; ?>">
            </div>
            <div class="mb-3">
              <label for="Posisi" class="form-label">Posisi</label>
              <select class="form-select" id="Posisi" name="Posisi" required>
                <option value="">Pilih Posisi</option>
                <option value="Penjahit">Penjahit</option>
                <option value="Packing">Packing</option>
                <option value="Pemotong">Pemotong</option>

              </select>
            </div>
            <div class="mb-3">
              <label for="Status" class="form-label">Status</label>
              <select class="form-select" id="Status" name="Status" required>
                <option value="">Pilih Status</option>
                <option value="Aktif">Aktif</option>
                <option value="NonAktif">NonAktif</option>
              </select>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
            <button type="submit" name="edit" class="btn btn-warning">Edit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script>
    function confirmDelete() {
      return confirm('Apa anda yakin ingin menghapus data ini?');
    }
  </script>
</body>
</html>