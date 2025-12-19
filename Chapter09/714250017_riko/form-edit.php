<?php
include("config.php");

// Cek apakah ada parameter id yang dikirim
if (isset($_GET['id'])) {
    $isbn = $_GET['id'];
    
    // Ambil data buku berdasarkan ISBN
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
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-sm rounded-4">
            <div class="card-header bg-warning text-dark rounded-top-4">
                <h4 class="mb-0">Formulir Edit Buku</h4>
            </div>

            <div class="card-body">
                <form action="proses-edit.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">ISBN</label>
                    <input type="text" name="isbn" class="form-control" 
                        value="<?php echo htmlspecialchars($buku['isbn']); ?>" readonly>
                    <div class="form-text">ISBN tidak dapat diubah</div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Judul Buku</label>
                    <input type="text" name="judul_buku" class="form-control" 
                        value="<?php echo htmlspecialchars($buku['judul_buku']); ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jenis Buku</label>
                    <select name="jenis_buku" class="form-select" required>
                    <option value="">-- Pilih Jenis --</option>
                    <option value="Romance" <?php echo ($buku['jenis_buku'] == 'Romance') ? 'selected' : ''; ?>>Romance</option>
                    <option value="Komik" <?php echo ($buku['jenis_buku'] == 'Komik') ? 'selected' : ''; ?>>Komik</option>
                    <option value="Novel" <?php echo ($buku['jenis_buku'] == 'Novel') ? 'selected' : ''; ?>>Novel</option>
                    <option value="Pembelajaran" <?php echo ($buku['jenis_buku'] == 'Pembelajaran') ? 'selected' : ''; ?>>Pembelajaran</option>
                    <option value="Olahraga" <?php echo ($buku['jenis_buku'] == 'Olahraga') ? 'selected' : ''; ?>>Olahraga</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Pembuat</label>
                    <input type="text" name="pembuat_buku" class="form-control" 
                        value="<?php echo htmlspecialchars($buku['pembuat_buku']); ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal</label>
                    <input type="date" name="tanggal_buku" class="form-control" 
                        value="<?php echo $buku['tanggal_buku']; ?>" required>
                </div>

                <div class="mb-4">
                    <label class="form-label">No Rak</label>
                    <input type="text" name="rak_buku" class="form-control" 
                        value="<?php echo htmlspecialchars($buku['rak_buku']); ?>" required>
                </div>


                <div class="d-flex justify-content-between">
                    <a href="list-buku.php" class="btn btn-outline-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" name="edit" class="btn btn-warning">
                        <i class="fas fa-save"></i> Update Data
                    </button>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>
