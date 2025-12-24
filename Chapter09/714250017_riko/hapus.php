<?php
include("config.php");

// Cek apakah ada parameter id yang dikirim
if (isset($_GET['id'])) {
    $isbn = $_GET['id'];
    
    // Ambil data buku untuk konfirmasi
    $sql = "SELECT * FROM buku WHERE isbn = '$isbn'";
    $query = mysqli_query($db, $sql);
    $buku = mysqli_fetch_array($query);
    

    // Cek apakah data ditemukan
    if (!$buku) {
        header("Location: list-buku.php");
        exit();
    }
} else {
    header("Location: list-buku.php");
    exit();
}

// Proses hapus jika konfirmasi
if (isset($_POST['konfirmasi'])) {
    $isbn_hapus = $_POST['isbn'];
    
    // Query DELETE berdasarkan ISBN
    $sql_delete = "DELETE FROM buku WHERE isbn = '$isbn_hapus'";
    $query_delete = mysqli_query($db, $sql_delete);
    

    if ($query_delete) {
        header("Location: list-buku.php");
    } else {
        header("Location: list-buku.php");
    }
    exit();
}

// Proses Batal
if (isset($_POST['batal'])) {
    header("Location: list-buku.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Hapus Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm rounded-4">
            <div class="card-header bg-danger text-white rounded-top-4">
                <h4 class="mb-0">
                <i class="fas fa-exclamation-triangle me-2"></i>
                Konfirmasi Penghapusan
                </h4>
            </div>

            <div class="card-body">
                <div class="alert alert-warning" role="alert">
                <i class="fas fa-exclamation-triangle me-2"></i>
                <strong>Perhatian!</strong> Data yang sudah dihapus tidak dapat dikembalikan lagi.
                </div>

                <h6 class="mb-3">Apakah Anda yakin ingin menghapus data buku berikut?</h6>

                <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                    <td class="fw-bold" style="width: 30%;">ISBN</td>
                    <td><?php echo htmlspecialchars($buku['isbn']); ?></td>
                    </tr>
                    <tr>
                    <td class="fw-bold">Judul Buku</td>
                    <td><?php echo htmlspecialchars($buku['judul_buku']); ?></td>
                    </tr>
                    <tr>
                    <td class="fw-bold">Jenis Buku</td>
                    <td><?php echo htmlspecialchars($buku['jenis_buku']); ?></td>
                    </tr>
                    <tr>
                    <td class="fw-bold">Nama Pembuat</td>
                    <td><?php echo htmlspecialchars($buku['pembuat_buku']); ?></td>
                    </tr>
                    <tr>
                    <td class="fw-bold">Tanggal</td>
                    <td><?php echo date('d/m/Y', strtotime($buku['tanggal_buku'])); ?></td>
                    </tr>
                    <tr>
                    <td class="fw-bold">No Rak</td>
                    <td><?php echo htmlspecialchars($buku['rak_buku']); ?></td>
                    </tr>
                </table>
                </div>

                <form method="POST" class="mt-4">
                <input type="hidden" name="isbn" value="<?php echo htmlspecialchars($buku['isbn']); ?>">
                
                <div class="d-flex justify-content-between">
                    <button type="submit" name="batal" class="btn btn-secondary">
                    <i class="fas fa-times me-2"></i>Batal
                    </button>
                    <button type="submit" name="konfirmasi" class="btn btn-danger" 
                            onclick="return confirm('Apakah Anda benar-benar yakin ingin menghapus data ini?')">
                    <i class="fas fa-trash me-2"></i>Ya, Hapus Data
                    </button>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>
</html>
