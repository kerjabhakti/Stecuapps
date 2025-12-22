<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Mahasiswa Baru</title>
    <style>
        /* Global Reset */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        body {
            font-family: 'Segoe UI', Tahoma, sans-serif;
            background-color: #f8f9fa;
            /* Background gradasi biru-oranye */
            background-image: 
                radial-gradient(at 0% 0%, rgba(0, 102, 204, 0.08) 0px, transparent 50%), 
                radial-gradient(at 100% 100%, rgba(214, 81, 28, 0.08) 0px, transparent 50%);
            background-attachment: fixed;
            color: #333;
            padding-bottom: 50px;
        }

        /* Header Oranye ULBI */
        header {
            background-color: #d6511c;
            color: white;
            padding: 2.5rem 1rem;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }

        /* Navigasi */
        nav {
            text-align: center;
            margin-bottom: 30px;
        }

        nav a {
            color: #0066cc;
            text-decoration: none;
            font-weight: bold;
            padding: 8px 16px;
            border: 1px solid #0066cc;
            border-radius: 4px;
            transition: 0.3s;
        }

        nav a:hover {
            background: #0066cc;
            color: white;
        }

        /* Box Form */
        form {
            max-width: 550px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        }

        fieldset {
            border: none;
        }

        p {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            color: #444;
        }

        /* Styling Input */
        input[type="text"],
        input[type="email"],
        textarea,
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1rem;
            font-family: inherit;
            transition: 0.3s;
        }

        input:focus, textarea:focus, select:focus {
            outline: none;
            border-color: #0066cc;
            box-shadow: 0 0 0 3px rgba(0, 102, 204, 0.1);
        }

        /* Radio Buttons */
        .radio-group {
            display: flex;
            gap: 20px;
            margin-top: 5px;
        }

        .radio-group label {
            font-weight: 400;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        /* Tombol Daftar Biru */
        input[type="submit"] {
            width: 100%;
            background-color: #0066cc;
            color: white;
            border: none;
            padding: 14px;
            border-radius: 6px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #004d99;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 102, 204, 0.2);
        }
    </style>
</head>
<body>
    <header>
        <h3>Formulir Pendaftaran Mahasiswa Baru</h3>
        <h1>UNIVERSITAS LOGISTIK DAN BISNIS INTERNASIONAL</h1>
    </header>

    <nav>
        <a href="index.php">[+] Kembali ke Menu</a>
    </nav>

    <br>

    <form action="proses-daftar.php" method="POST">
        <fieldset>

            <p>
                <label for="nama">Nama Lengkap:</label>
                <input type="text" name="nama" placeholder="nama lengkap"/>
            </p>

            <p>
                <label for="alamat">Alamat:</label>
                <textarea name="alamat"></textarea>
            </p>

            <p>
                <label for="jenis_kelamin">Jenis Kelamin:</label>

                <label><input type="radio" name="jenis_kelamin" value="Laki-laki" id="laki-laki"/> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan"/> Perempuan</label>
            </p>

            <p>
                <label for="agama">Agama:</label>
                <select name="agama" id="agama">
                    <option value="">Pilih Agama</option>
                    <?php
                    $agamas = array("Islam", "Kristen", "Katolik", "Hindu", "Budha", "Atheis");
                    foreach ($agamas as $agama) {
                        echo "<option value='$agama'>$agama</option>";
                    }
                    ?>
                </select>
            </p>
            <p>
                <label for="sekolah_asal">Sekolah Asal:</label>
                <input type="text" name="sekolah_asal" id="sekolah_asal" required />
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar" />
            </p>
        </fieldset>

    </form>
</body>
</html>