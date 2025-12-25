<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>

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
        <div class="card box">
            <div class="card-header text-center font-weight-bold">
                Tambah Data Barang
            </div>
            <div class="card-body">
                <form method="post" action="proses_create.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama_barang">Nama_barang :</label>
                        <input type="text" name="nama_barang" class="form-control" id="nama_barang" placeholder="Nama barang " required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_masuk">Tanggal_masuk :</label>
                        <input type="date" name="tanggal_masuk" class="form-control" id="tanggal_masuk" placeholder="Tanggal masuk "
                            required>
                    </div>  
                    <div class="form-group">
                        <label for="harga_barang">Harga_barang :</label>
                        <input type="number" name="harga_barang" class="form-control" id="harga_barang" placeholder="Harga barang "
                            required>
                    </div> 
                    <div class="form-group">
                        <label for="stok">Stok :</label>
                        <input type="number" name="stok" class="form-control" id="stok" placeholder="Stok" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi Barang</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Deskripsi Barang"
                            name="deskripsi" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Upload Foto</label><br>
                        <img src="https://via.placeholder.com/300" id="preview" class="img-fluid" width="300px"
                            height="300px">
                        <input type="file" name="foto" class="file" accept="image/*">
                        <div class="input-group my-3">
                            <input type="text" class="form-control" disabled placeholder="Upload Foto" id="file">
                            <div class="input-group-append">
                                <button type="button" class="browse btn btn-primary">Browse</button>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="box btn btn-success btn-block">Submit</button>
                </form>
            </div>
        </div>
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