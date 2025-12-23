<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru POLTEKPOS</title>
    <link rel="stylesheet" href="style.css">
    <style>
       body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            
       } 
    </style>
</head>
<body>
    <div class="depan">
    <header>
        <h3>PENDAFTARAN MAHASISWA BARU</h3>
        <h1>POLITEKNIK POS INDONESIA</h1>
    </header>

    <?php if(isset($_GET['status'])): ?>
    <p class="status <?php echo $_GET['status']; ?>">
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
    <?php endif; ?>

    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar</a></li>
            <li><a href="list-maba.php">Pendaftar</a></li>
        </ul>
    </nav>
    </div>
</body>
</html>