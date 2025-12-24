<?php
include("config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM pelayanan_usg WHERE ID_Pasien = '$id'";
    $query = mysqli_query($db, $sql);
    $pasienusg = mysqli_fetch_array($query);
    

    // Cek apakah data ditemukan
    if (!$pasienusg) {
        header("Location: list-pasien.php");
        exit();
    }
} else {
    header("Location: list-pasien.php");
    exit();
}
?>
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
        }
    </style>
</head>
<body>

<div class="card-form">
    <small class="text-muted">Form Pendaftaran</small>
    <h3 class="fw-bold mb-4">Pelayanan USG</h3>

    <form action="proses-edit.php" method="POST">
        
        <div class="mb-3">
            <label class="form-label">ID Pendaftaran</label>
            <input type="number" name="ID_Pasien" class="form-control" value="<?= $pasienusg['ID_Pasien']; ?>" readonly>
        </div>
        <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" name="Nama_Pasien" class="form-control" value="<?= $pasienusg['Nama_Pasien']; ?>">
        </div>
        <div class="col-md-6">
            <label class="form-label">No WhatsApp</label>
            <input type="number" name="Nomor_Whatsapp" class="form-control" value="<?= $pasienusg['Nomor_Whatsapp']; ?>">
        </div>
        </div>
        <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-label">Tanggal Pelayanan</label>
            <input type="date" name="Tanggal_Kunjungan" class="form-control" value="<?= $pasienusg['Tanggal_Kunjungan']; ?>">
        </div>
        <div class="col-md-6">
            <label class="form-label">Jam Pelayanan</label>
            <input type="time" name="Jam_kunjungan" class="form-control" value="<?= $pasienusg['Jam_kunjungan']; ?>">
        </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Usia Kehamilan (minggu)</label>
            <input type="number" name="Usia_kehamilan_(weeks)" class="form-control" value="<?= $pasienusg['Usia_kehamilan_(weeks)']; ?>">
        </div>
        <div class="mb-4">
            <label class="form-label">Keluhan Pasien</label>
            <textarea name="Keluhan_pasien" rows="4" class="form-control"><?= $pasienusg['Keluhan_pasien']; ?></textarea>
        </div>
        <button type="submit" name="edit" class="btn px-4 py-2 rounded-pill">
            Update Pendaftaran
        </button>

    </form>
</div>

</body>
</html>