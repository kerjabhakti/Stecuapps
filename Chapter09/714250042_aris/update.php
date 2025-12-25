<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Barang</title>

    <!-- Link CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style CSS -->
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Arial';
            font-weight: 500;
        }
         body{
        background-image:url(image/perpus.jpeg);
        height: 100%; 
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        }   

        .box{
        background: transparent;
        border: 2px solid rgba(255, 255, 255, .2);
        backdrop-filter: blur(20px);
        box-shadow: 0 0 10px rgba(0,0,0, .2);
        color: white;
        border-radius: 10px;
        }

        .container {
            margin-top: 50px;
        }

        .file {
            visibility: hidden;
            position: absolute;
        }
    </style>

    <!-- Link JS -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <?php
            include 'koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"select * from data_barang where id='$id'");
            while($d = mysqli_fetch_array($data)){
        ?>

        <div class="card box">
            <div class="card-header text-center font-weight-bold">
                Edit Data Buku
            </div>
            <div class="card-body">
                <form method="post" action="proses_update.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                        <label for="nama_barang">Nama Buku:</label>
                        <input type="text" name="nama_barang" class="form-control" id="nama_barang" value="<?php echo $d['nama_barang'] ?>" placeholder="Nama Barang " required>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_masuk">Tanggal masuk:</label>
                        <input type="date" name="tanggal_masuk" class="form-control" id="tanggal_masuk" value="<?php echo $d['tanggal_masuk'] ?>" id="tanggal_masuk" placeholder="Tanggal_masuk "
                            required>
                    </div>
                    
                    <div class="form-group">
                        <label for="harga_barang">Harga Buku:</label>
                        <input type="number" name="harga_barang" class="form-control" value="<?php echo $d['harga_barang'] ?>" placeholder="Harga barang  " required>
                    </div>

                    <div class="form-group">
                        <label for="stok">Stok Buku:</label>
                        <input type="number" name="stok" class="form-control" value="<?php echo $d['stok'] ?>" placeholder="Stok barang  " required>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deksripsi Buku</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Deskripsi Barang"
                            name="deskripsi" rows="3"><?php echo $d['deskripsi'] ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Upload Foto</label><br>
                        <img src="<?php echo "foto/".$d['foto']; ?>" id="preview" class="img-fluid" width="300px"
                            height="300px">
                        <input type="file" name="foto" class="file" accept="image/*">
                        <div class="input-group my-3">
                            <input type="text" class="form-control" disabled placeholder="<?php echo $d['foto'] ?>" id="file">
                            <div class="input-group-append">
                                <button type="button" class="browse btn btn-primary">Browse</button>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                </form>
            </div>
        </div>
        <?php 
                       }
                    ?>
    </div>

    <script>
        $(document).on("click", ".browse", function () {
            var file = $(this).parents().find(".file");
            file.trigger("click");
        });
        $('input[type="file"]').change(function (e) {
            var fileName = e.target.files[0].name;
            $("#file").val(fileName);

            var reader = new FileReader();
            reader.onload = function (e) {
                // get loaded data and render thumbnail.
                document.getElementById("preview").src = e.target.result;
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });
    </script>
</body>

</html>