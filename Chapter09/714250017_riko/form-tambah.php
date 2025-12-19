<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-sm rounded-4">
            <div class="card-header bg-primary text-white rounded-top-4">
                <h4 class="mb-0">Formulir Tambah Buku</h4>
            </div>

            <div class="card-body">
                <form action="proses-tambah.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">ISBN</label>
                    <input type="text" name="isbn" class="form-control" placeholder="Masukkan ISBN" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Judul Buku</label>
                    <input type="text" name="judul_buku" class="form-control" placeholder="Masukkan judul buku" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jenis Buku</label>
                    <select name="jenis_buku" class="form-select" required>
                    <option value="">-- Pilih Jenis --</option>
                    <option>Romance</option>
                    <option>Komik</option>
                    <option>Novel</option>
                    <option>Pembelajaran</option>
                    <option>Olahraga</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Pembuat</label>
                    <input type="text" name="pembuat_buku" class="form-control" placeholder="Nama penulis / pembuat" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal</label>
                    <input type="date" name="tanggal_buku" class="form-control" required>
                </div>

                <div class="mb-4">
                    <label class="form-label">No Rak</label>
                    <input type="text" name="rak_buku" class="form-control" placeholder="Nomor rak buku" required>
                </div>


                <div class="d-flex justify-content-between">
                    <a href="list-buku.php" class="btn btn-outline-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" name="tambah" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan
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