<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiwa Baru Universitas Logistik dan Bisnis Internasional</title>
    <style>
        /* Reset & Global */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f4f7f6;
            /* Background gradasi Biru & Oranye sesuai permintaan */
            background-image: 
                radial-gradient(at 0% 0%, rgba(0, 102, 204, 0.15) 0px, transparent 50%), 
                radial-gradient(at 100% 100%, rgba(214, 81, 28, 0.15) 0px, transparent 50%);
            background-attachment: fixed;
            color: #333;
            line-height: 1.6;
        }

        /* Header - Warna Oranye ULBI */
        header {
            background-color: #d6511c;
            color: white;
            padding: 3rem 1rem;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        header h1 { font-size: 2rem; margin-bottom: 0.5rem; }
        header h3 { font-weight: 300; letter-spacing: 2px; }

        /* Menu Navigasi */
        .menu-container {
            max-width: 600px;
            margin: -30px auto 0; /* Menumpuk sedikit ke header */
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            text-align: center;
        }

        .menu-container h4 {
            margin-bottom: 1.5rem;
            color: #555;
            text-transform: uppercase;
        }

        nav ul { list-style: none; }

        /* Tombol Biru */
        nav ul li { margin-bottom: 1rem; }
        nav ul li a {
            display: block;
            background-color: #0066cc;
            color: white;
            text-decoration: none;
            padding: 1rem;
            border-radius: 5px;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        nav ul li a:hover {
            background-color: #004d99;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 102, 204, 0.3);
        }

        /* Notifikasi Status */
        .status-msg {
            margin-top: 1rem;
            padding: 10px;
            border-radius: 5px;
            font-weight: bold;
        }
        .sukses { background: #d4edda; color: #155724; }
        .gagal { background: #f8d7da; color: #721c24; }
    </style>
</head>
<body>
    <header>
        <h3>Pendaftaran Mahasiswa Baru</h3>
        <h1>UNIVERSITAS LOGISTIK DAN BISNIS INTERNASIONAL</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar</a></li>
            <li><a href="list-maba.php">Pendaftaran</a></li>
        </ul>
    </nav>
     <?php if(isset($_GET['status'])): ?>
        <p>
            <div style="text-align: center; margin-top: 50px;">
            <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran mahasiswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
            ?>
        </p>
    <?php endif; ?>
    
</body>
</html>