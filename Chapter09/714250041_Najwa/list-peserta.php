<?php include ("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru | POLTEKPOS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page-wrapper mt-5 text-center">
        <div class="container size">
            <div class="container-sm">
                <div class="row">
                    <div class="col-12 mt-3">
                        <header>
                            <h3>Peserta Quiziz</h3>
                        </header>
                        <nav> 
                            <a href="form-daftar.php"><button class="btn btn-primary">[+] Tambah Data</button></a>
                        </nav> <br>
                    </div>
                </div>
            </div>
            <div class="container-sm">
                <div class="row justify-content-center align-items-center" style="height: 100%;">
                    <div class="col-12">
                        <table class="table table-hover" border="1">
                            <thead class="table-active">
                                <tr>
                                    <th>No</th>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Tingkat sekolah</th>
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $sql = "SELECT * FROM tbl_peserta";
                                $query = mysqli_query($db, $sql);
                                while($peserta = mysqli_fetch_array($query)){
                                    echo "<tr>";
                                    echo "<td>".($no++)."</td>";
                                    echo "<td>".$peserta['id']."</td>";
                                    echo "<td>".$peserta['nama']."</td>";
                                    echo "<td>".($peserta['tingkat'] == "sma" ? "SMA" : ($peserta['tingkat'] == "smp" ? "SMP" : "SD"))."</td>";
                                    echo "<td>".($peserta['kategori'] == "beginner" ? "Beginner" : ($peserta['kategori'] == "intermediate" ? "Intermediate" : "Advanced"))."</td>";
                                    echo "<td>";
                                    echo "<a href='form-edit.php?id=".$peserta['id']."'><button class='btn btn-warning'>Edit</button></a> ";
                                    echo " <a href='hapus.php?id=".$peserta['id']."'><button class='btn btn-danger' onclick='konfirmasiHapus();'>Hapus</button></a>";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="alert.js"></script>
</html>
