<?php include ("config.php"); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Daftar Buku</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow-sm rounded-4">
    

    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
      <h5 class="mb-0">Daftar Buku</h5>
      <div class="d-flex gap-2">
        <a href="form-tambah.php" class="btn btn-light btn-sm fw-bold">
          + Tambah Data
        </a>
        <a href="index.php" class="btn btn-outline-light btn-sm">
          <i class="fas fa-arrow-left"></i> Keluar
        </a>
      </div>
    </div>

    <div class="card-body">

      <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle text-center">
          <thead class="table-primary">
            <tr>
              <th>ISBN</th>
              <th>Judul</th>
              <th>Jenis</th>
              <th>Nama Pembuat</th>
              <th>Tanggal</th>
              <th>No Rak</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $sql = "SELECT * FROM buku";
              $query = mysqli_query($db, $sql);

              while($buku = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>{$buku['isbn']}</td>";
                echo "<td>{$buku['judul_buku']}</td>";
                echo "<td>{$buku['jenis_buku']}</td>";
                echo "<td>{$buku['pembuat_buku']}</td>";
                echo "<td>{$buku['tanggal_buku']}</td>";
                echo "<td>{$buku['rak_buku']}</td>";
                echo "<td>";
                echo "<a href='form-edit.php?id={$buku['isbn']}' class='btn btn-warning btn-sm me-1'><i class=\"fas fa-edit me-2\"></i>Edit</a>";
                echo "<a href='hapus.php?id={$buku['isbn']}' class='btn btn-danger btn-sm' onclick=\"return confirm('Yakin ingin menghapus data?')\"><i class=\"fas fa-trash me-2\"></i>Hapus</a>";
                echo "</td>";
                echo "</tr>";
              }
            ?>
          </tbody>
        </table>
      </div>
              

      <p class="fw-bold mt-3">
        Total Data: <?php echo mysqli_num_rows($query); ?>
      </p>
    </div>
  </div>
</div>
</body>
</html>
