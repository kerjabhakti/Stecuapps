<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OPTIKKU</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8f9fa;
        }
        header {
            text-align: center;
            padding: 40px 0 20px;
        }
        .menu-box {
            max-width: 500px;
            margin: auto;
            padding: 25px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }
        .menu-box ul {
            list-style: none;
            padding: 0;
        }
        .menu-box li {
            margin-bottom: 15px;
        }
        .menu-box a {
            display: block;
            padding: 12px;
            text-decoration: none;
            background: #0d6efd;
            color: white;
            border-radius: 8px;
            text-align: center;
            font-size: 18px;
            transition: 0.2s;
        }
        .menu-box a:hover {
            background: #0b5ed7;
        }
    </style>
</head>

<body>

    <header>
        <h3 class="text-muted">Toko kacamata paling lengkap</h3>
        <h1 class="fw-bold">OPTIKKU</h1>
    </header>

    <div class="menu-box">
        <h4 class="text-center mb-3">Menu Utama</h4>
        <ul>
            <li><a href="form_beli.php">User</a></li>
            <li><a href="list_produk.php">Admin</a></li>
        </ul>
    </div>

</body>
</html>
