<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      min-height: 100vh;
      background: linear-gradient(135deg, #1f4037, #99f2c8);
    }
  </style>
</head>
<body class="d-flex align-items-center justify-content-center">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <div class="card shadow rounded-4 text-center">
          <div class="card-body p-5">
            <h3 class="mb-4 fw-bold">Selamat Datang</h3>

            <div class="d-flex gap-3 justify-content-center flex-wrap">
              <a href="form-tambah.php" class="btn btn-success px-4">
                Tambah Data
              </a>
              <a href="list-buku.php" class="btn btn-primary px-4">
                Dashboard
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
