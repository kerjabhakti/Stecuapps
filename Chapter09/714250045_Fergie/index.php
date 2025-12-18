<?php
require_once 'karyawan.php';
if(isset($_POST["submit"])) {
  if(tambah($_POST) > 0) {
    echo "<script>alert ('berhasil');
    document.location.href = 'index.php';
    </script>";
  } else {
    echo "gagal";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Data karyawan</title>
</head>
<body>
   <div class="container ">
    <div class="card">
        <div class="card-body">
            <h3>Data Karyawan</h3>
            <?php foreach($SelectKaryawan as $x) :?>
                <h3>Nama : <?= $x['NamaKaryawan'] ?></h3>
                <h3>Posisi : <?= $x['Posisi'] ?></h3>
                <h3>Status : <?= $x['Status'] ?></h3>
            <?php endforeach ?>
        </div>
    </div>
   </div>

   <div class="card">
    <div class="card-body">
        <form action="" method="post">
            <label for="">NamaKaryawan</label>
            <input type="text" name="NamaKaryawan">
            <label for="">Posisi</label>
            <input type="text" name="Posisi">
            <label for="">Status</label>
            <input type="text" name="Status">
            <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
   </div>
</body>
</html>