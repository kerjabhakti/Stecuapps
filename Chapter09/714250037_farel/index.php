<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru ULBI</title>

    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background-color: #f2f4f7;
            color: #333;
        }

        /* Wrapper */
        .halamanutama {
            max-width: 1100px;
            margin: auto;
        }

        /* Header */
        header {
            background: linear-gradient(135deg, #2c7be5, #1a68d1);
            color: #fff;
            padding: 40px 20px;
            text-align: center;
            border-radius: 0 0 12px 12px;
        }

        header h3 {
            font-weight: 400;
            letter-spacing: 1px;
            margin-bottom: 10px;
        }

        header h1 {
            font-size: 28px;
            font-weight: 600;
        }

        /* Navigation */
        nav {
            margin-top: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
        }

        nav ul li a {
            display: block;
            padding: 15px 35px;
            text-decoration: none;
            font-weight: 600;
            color: #2c7be5;
            transition: 0.3s;
        }

        nav ul li a:hover {
            background-color: #2c7be5;
            color: white;
        }

        /* Responsive */
        @media (max-width: 768px) {
            header h1 {
                font-size: 22px;
            }

            nav ul {
                flex-direction: column;
            }

            nav ul li a {
                text-align: center;
                border-top: 1px solid #eee;
            }
        }
    </style>
</head>
<body>

<div class="halamanutama">

    <header>
        <h3>Pendaftaran Mahasiswa Baru</h3>
        <h1>Universitas Logistik dan Bisnis Internasional</h1>
    </header>

    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar</a></li>
            <li><a href="list-maba.php">Pendaftar</a></li>
        </ul>
    </nav>

</div>

</body>
</html>
