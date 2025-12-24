<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Pelayanan USG</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Untuk Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0; /* Opsional, untuk padding */
        }

        /* Untuk Firefox */
        input[type=number] {
        -moz-appearance: textfield; /* Menyembunyikan spin button di Firefox */
        }

        /* Untuk semua browser (opsional, memastikan tampilan konsisten) */
        input[type=number] {
        appearance: none;
        }
        body {
            background-color: #f6f7fb;
        }
        .card-form {
            max-width: 850px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,.05);
        }
        .form-control {
            border-radius: 12px;
            padding: 14px;
        }
        textarea.form-control {
            resize: none;
        }
        .btn{
            background: #FFDAB0;
            color:#4b5320;
        }
    </style>
</head>
<body>

<div class="card-form">
    <small class="text-muted">Form Pendaftaran</small>
    <h3 class="fw-bold mb-4">Pelayanan USG</h3>

    <form action="proses-daftar.php" method="POST">
        
        <div class="mb-3">
            <label class="form-label">ID Pendaftaran</label>
            <input type="number" name="idpendaftaran" class="form-control" placeholder="ID Pasien">
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama lengkap">
            </div>
            <div class="col-md-6">
                <label class="form-label">No WhatsApp</label>
                <input type="number" name="nowa" class="form-control" placeholder="Nomor WhatsApp">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Tanggal Pelayanan</label>
                <input type="date" name="tanggal_pelayanan" class="form-control">
            </div>
            <div class="col-md-6">
                <label class="form-label">Jam Pelayanan</label>
                <input type="time" name="jam_pelayanan" class="form-control">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Usia Kehamilan (minggu)</label>
            <input type="number" name="weeks" class="form-control" placeholder="Contoh: 24">
        </div>
        <div class="mb-4">
            <label class="form-label">Keluhan Pasien</label>
            <textarea name="keluhan" rows="4" class="form-control" placeholder="Tuliskan keluhan pasien"></textarea>
        </div>
        <button type="submit" name="daftar" class="btn px-4 py-2 rounded-pill">
            Kirim Pendaftaran
        </button>
<script>
document.querySelector("form").addEventListener("submit", function(){
    alert("Apakah data sudah sesuai?");
});
</script>

    </form>
</div>

</body>
</html>
