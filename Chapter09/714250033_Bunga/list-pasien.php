<?php include ("config.php"); ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Pelayanan USG</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f5f6fa;
            
        }
        header{
            background:#FFDAB0;
            color:#4b5320;;
            color:#4b5320;
            padding:25px;
            text-align:center;
        }
    </style>
</head>

<body>

<header>
    <h3>Pendaftaran Pelayanan USG</h3>
    <h5>Klinik Bumi Maryam</h5>
</header>

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold">Data Pendaftar</h4>
        <a href="form_daftar_usg.php" class="btn btn-success"  >+ Tambah Data</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            <table class="table table-bordered table-striped">
                <thead class="table-danger text-center">
                    <tr>
                        <th>ID Pasien</th>
                        <th>Nama Pasien</th>
                        <th>No WhatsApp</th>
                        <th>Tanggal Kunjungan</th>
                        <th>Jam Kunjungan</th>
                        <th>Usia Kehamilan (weeks)</th>
                        <th>Keluhan Pasien</th>
                        <th>Fitur</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                $sql = "SELECT * FROM pelayanan_usg";
                $query = mysqli_query ($db, $sql);

                while($pasienusg = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td>".$pasienusg['ID_Pasien']."</td>";
                    echo "<td>".$pasienusg['Nama_Pasien']."</td>";
                    echo "<td>".$pasienusg['Nomor_Whatsapp']."</td>";
                    echo "<td>".$pasienusg['Tanggal_Kunjungan']."</td>";
                    echo "<td>".$pasienusg['Jam_kunjungan']."</td>";
                    echo "<td>".$pasienusg['Usia_kehamilan_(weeks)']."</td>";
                    echo "<td>".$pasienusg['Keluhan_pasien']."</td>";

                    echo "<td class='text-center'>
                            <a href='form-edit.php?id=".$pasienusg['ID_Pasien']."' class='btn btn-sm btn-primary'>Edit</a>
                            <a href='hapus.php?id=".$pasienusg['ID_Pasien']."' class='btn btn-sm btn-danger' onclick=\"return confirm('Yakin ingin menghapus data?')\">Hapus</a>
                          </td>";
                    echo "</tr>";
                } 
                ?>
                </tbody>

            </table>
        </div>
    </div>

</div>

</body>
</html>
