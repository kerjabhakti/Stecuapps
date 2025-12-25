<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Data Buku</title>

    <!-- Link CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style CSS -->
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Arial';
            font-weight: 500;
            color: white;
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

        .foto {
            width: 100px;
            height: 75px;
            border-radius: 5px;
        }
    </style>

    <!-- Link JS -->
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h2 class="text-center mb-5 ">List Data Buku</h2>
        <?php 
            if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "insert"){
                    echo "
                    <script>
                    alert('Buku Berhasil di Tambah')
                    </script>
                  ";
                }elseif ($_GET['pesan'] == "update") {
                    echo "
                    <script>
                    alert('Buku Berhasil di Update')
                    </script>
                  ";
                }
                elseif ($_GET['pesan'] == "delete") {
                    echo "
                    <script>
                    alert('Buku Berhasil di Hapus')
                    </script>
                  ";
                }
            }
	    ?>

        <br>
        <a href="create.php" class="btn btn-primary mb-4">Tambah Buku</a>
        <a href="home.php"   class="btn btn-primary mb-4">Kembali </a>

        <table class=" table table-striped box ">
            <thead>
                <tr>
                    <th scope="col">Foto</th>
                    <th scope="col">Nama_buku</th>
                    <th scope="col">Tanggal_masuk</th>
                    <th scope="col">Harga_buku</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "select * from data_barang");
            while($d = mysqli_fetch_array($data)){
                ?>
                <tr class="">
                    <th scope="row"><img class="foto" src="<?php echo "foto/".$d['foto']; ?>"></th>
                    <td><?php echo $d['nama_barang'] ?></td>
                    <td><?php echo $d['tanggal_masuk'] ?> Tahun</td>
                    <td><?php echo $d['harga_barang'] ?></td>
                    <td><?php echo $d['stok'] ?></td>
                    <td><?php echo $d['deskripsi'] ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $d['id']; ?>" class="btn btn-warning text-white mb-2">Edit</a>
                        <a href="delete.php?id=<?php echo $d['id']; ?>" class="btn btn-danger mb-2">Hapus</a>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>

    </div>
</body>

</html>