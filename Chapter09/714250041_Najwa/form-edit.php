<?php
    include ("config.php"); 
    $sql = "SELECT * FROM tbl_peserta WHERE id=".$_GET['id'];
    $query = mysqli_query($db, $sql);
    $id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>
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
                            <h3>Form Edit User Quiziz</h3>
                        </header>
                    </div>
                    <div class="col-12 mt-3">
                        <form action="proses-edit.php?id=<?php echo $id; ?>" method="post">
                            <?php
                            while($peserta = mysqli_fetch_array($query)){
                                echo "
                                <p>
                                    <div class='mb-3'>
                                        <label class='form-label' for='nama'>Nama: </label>
                                        <input class='form-control' type='text' name='nama' placeholder='nama lengkap' value='".$peserta['nama']."' required/>
                                    </div>
                                </p>
                                ";
                                echo '
                                <p>
                                    <label for="tingkat">Tingkat Sekolah: </label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tingkat" value="sma" '.($peserta["tingkat"] == "sma" ? "checked" : "").'/>
                                        <label class="form-check-label" for="radioDefault1">Sekolah Menengah Atas</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tingkat" value="smp" '.($peserta["tingkat"] == "smp" ? "checked" : "").'/>
                                        <label class="form-check-label" for="radioDefault2">Sekolah Menengah Pertama</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tingkat" value="sd" '.($peserta["tingkat"] == "sd" ? "checked" : "").'/>
                                        <label class="form-check-label" for="radioDefault3">Sekolah Dasar</label>
                                    </div>
                                </p>
                                ';
                                echo '
                                <p>
                                    <label for="kategori">Kategori: </label>
                                    <select class="form-select" name="kategori" id="kategori">
                                        <option value="beginner" '.($peserta["kategori"] == "beginner" ? "selected" : "").'>Beginner</option>
                                        <option value="intermediate" '.($peserta["kategori"] == "intermediate" ? "selected" : "").'>Intermediate</option>
                                        <option value="advanced" '.($peserta["kategori"] == "advanced" ? "selected" : "").'>Advanced</option>
                                    </select>
                                </p>
                                ';
                                echo "<input class='btn btn-success' type='submit' value='Edit' name='daftar' onclick='konfirmasiEdit();'/>";
                            }
                            ?>
                                <p>
                                </p>
                        </form>
                    </div>
               </div>
            </div>
        </div>
    </div>
    <script src="alert.js"></script>
</body>
</html>