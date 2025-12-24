<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page-wrapper mt-5">
        <div class="container size">
            <div class="container-sm">
                <div class="row">
                    <div class="col-12 mt-3 text-center">
                        <header>
                            <h3>Form Daftar User Quiziz</h3>
                        </header>
                    </div>
                    <div class="col-12 mt-3">
                        <form action="proses-daftar.php" method="post">
                            <fieldset>
                                <p>
                                    <div class="mb-3">
                                        <label class="form-label" for="nama">Nama: </label>
                                        <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required/>
                                    </div>
                                </p>
                                <p>
                                    <label for="tingkat">Tingkat Sekolah: </label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tingkat" value="sma" />
                                        <label class="form-check-label" for="radioDefault1">Sekolah Menengah Atas</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tingkat" value="smp" />
                                        <label class="form-check-label" for="radioDefault2">Sekolah Menengah Pertama</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tingkat" value="sd" />
                                        <label class="form-check-label" for="radioDefault3">Sekolah Dasar</label>
                                    </div>
                                </p>
                                <p>
                                    <label for="kategori">Kategori: </label>
                                    <select class="form-select" name="kategori" id="kategori">
                                        <option value="beginner">Pemula</option>
                                        <option value="intermediate">Menengah</option>
                                        <option value="advanced">Tinggi</option>
                                    </select>
                                </p>
                                <p>
                                    <input class="btn btn-success" type="submit" value="Daftar" name="daftar" />
                                </p>
                            </fieldset>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>