<?php include ("config.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru</title>
    <style>
        /* Global Styles */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        body {
            font-family: 'Segoe UI', Tahoma, sans-serif;
            background-color: #f8f9fa;
            /* Background gradasi halus Biru ke Oranye */
            background-image: 
                radial-gradient(at 0% 0%, rgba(0, 102, 204, 0.1) 0px, transparent 50%), 
                radial-gradient(at 100% 100%, rgba(214, 81, 28, 0.1) 0px, transparent 50%);
            background-attachment: fixed;
            color: #333;
            line-height: 1.6;
        }

        /* Header Oranye */
        header {
            background-color: #d6511c;
            color: white;
            padding: 2rem 1rem;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        /* Navigasi */
        nav {
            background: white;
            padding: 1rem;
            text-align: center;
            margin-bottom: 2rem;
            border-bottom: 1px solid #ddd;
        }

        nav a {
            color: #0066cc;
            text-decoration: none;
            font-weight: bold;
            padding: 0.5rem 1rem;
            border: 1px solid #0066cc;
            border-radius: 4px;
            transition: 0.3s;
        }

        nav a:hover {
            background: #0066cc;
            color: white;
        }

        /* Table Container */
        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        /* Header Tabel Biru */
        thead {
            background-color: #0066cc;
            color: white;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        tr:hover { background-color: #f1f7ff; }

        /* Tombol Aksi */
        .btn {
            text-decoration: none;
            padding: 5px 12px;
            border-radius: 4px;
            font-size: 0.85rem;
            font-weight: bold;
            display: inline-block;
        }

        .edit { color: #17a2b8; border: 1px solid #17a2b8; }
        .edit:hover { background: #17a2b8; color: white; }

        .hapus { color: #dc3545; border: 1px solid #dc3545; margin-left: 5px; }
        .hapus:hover { background: #dc3545; color: white; }

        .total {
            margin-top: 20px;
            font-weight: bold;
            color: #555;
            background: white;
            display: inline-block;
            padding: 10px 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>
    <header>
        <h3>Pendaftaran Mahasiswa Baru</h3>
    </header>

    <nav>
        <a href="from-daftar.php">[+] Tambah Data</a>
    </nav>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM pendaftaran";
            $query = mysqli_query($db, $sql);

            while($maba = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$maba['id']."</td>";
                echo "<td>".$maba['nama']."</td>";
                echo "<td>".$maba['alamat']."</td>";
                echo "<td>".$maba['jenis_kelamin']."</td>";
                echo "<td>".$maba['agama']."</td>";
                echo "<td>".$maba['sekolah_asal']."</td>";
                echo "<td>";
                echo "<a href='form-edit.php?id=".$maba['id']."'>Edit</a> | ";
                echo "<a href='javascript:void(0)' onclick='konfirmasiHapus(".$maba['id'].")'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>

        </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query); ?></p>

    <script>
        function konfirmasiHapus(id) {
            if (confirm("Apakah Anda yakin ingin menghapus data dengan ID " + id + "?")) {
                window.location.href = "hapus.php?id=" + id;
            }
        }
    </script>
</body>
</html>
