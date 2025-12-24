<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Pelayanan USG - Klinik Bumi Maryam</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            background: #f7f7f7;
        }

        header{
            background: #FFDAB0;
            color: white;
            text-align: center;
            padding: 30px 10px;
        }

        header h1{
            margin: 5px 0;
            color: #4b5320;
        }

        header h3{
            color: #4b5320;
        }

        .container{
            max-width: 900px;
            margin: 40px auto;
            text-align: center;
        }

        p{
            color: #4b5320;
        }

        .card{
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 3px 8px rgba(0,0,0,0.2);
        }

        nav ul{
            list-style: none;
            padding: 0;
            margin-top: 20px;
        }

        nav ul li{
            display: inline-block;
            margin: 10px;
        }

        nav ul li a{
            text-decoration: none;
            background: #FFDAB0;
            color: #4b5320;
            padding: 10px 18px;
            border-radius: 6px;
            transition: 0.3s;
        }

        nav ul li a:hover{
            background: #eda58eff;
        }

        footer{
            margin-top: 50px;
            text-align: center;
            padding: 15px;
            background: #ddd;
        }
    </style>
</head>

<body>
    <header>
        <h3>Pendaftaran Pelayanan USG</h3>
        <h1>Klinik Bumi Maryam</h1>
        <p>Pelayanan terbaik untuk kesehatan ibu dan buah hati</p>
    </header>

    <div class="container">
        <div class="card">
            <h2>Selamat Datang</h2>
            <p>Silakan pilih menu di bawah untuk melakukan pendaftaran atau melihat daftar pendaftar</p>

            <nav>
                <ul>
                    <li><a href="form_daftar_usg.php">Daftar USG</a></li>
                    <li><a href="list-pasien.php">Data Pendaftar</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <footer>
        &copy; 2025 Klinik Bumi Maryam. All Rights Reserved.
    </footer>
</body>
</html>
