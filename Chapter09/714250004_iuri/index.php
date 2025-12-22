<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warungaas</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f7f6; margin: 0; padding: 40px; text-align: center; }
        .container { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); display: inline-block; min-width: 300px; }
        h1 { color: #2c3e50; margin-bottom: 5px; }
        h3 { color: #7f8c8d; font-weight: 400; margin-top: 0; }
        nav ul { list-style: none; padding: 0; }
        nav li { margin: 10px 0; }
        nav a { text-decoration: none; color: white; background: #3498db; padding: 10px 20px; border-radius: 5px; display: block; transition: 0.3s; }
        nav a:hover { background: #2980b9; }
        .status { margin-top: 20px; color: green; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h3>Daftar Cireng</h3>
            <h1>Warung AaS</h1>
        </header>

        <h4>Menu</h4>
        <nav>
            <ul>
                <li><a href="form-daftar.php">Daftar Baru</a></li>
                <li><a href="list-maba.php">Pendaftar</a></li>
            </ul>
        </nav>

        <?php if(isset($_GET['status'])): ?>
            <p class="status">
                <?php echo ($_GET['status'] == 'sukses') ? "Pendaftaran baru berhasil!" : "Pendaftaran gagal!"; ?>
            </p>
        <?php endif; ?>
    </div>
</body>
</html>