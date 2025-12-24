<?php
include 'config.php';

// Proses simpan transaksi
if (isset($_POST['simpan'])) {
    $nama_pelanggan = $_POST['pelanggan'];
    $id_menu = $_POST['id_menu'];
    $jumlah = $_POST['jumlah'];

    // simpan pelanggan
    mysqli_query($conn, "INSERT INTO pelanggan (nama_pelanggan) VALUES ('$nama_pelanggan')");
    $id_pelanggan = mysqli_insert_id($conn);

    // ambil harga menu
    $menu = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM menu WHERE id_menu=$id_menu"));
    $total = $menu['harga'] * $jumlah;

    // simpan transaksi
    mysqli_query($conn, "INSERT INTO transaksi (id_menu, id_pelanggan, jumlah, total_bayar)
        VALUES ($id_menu, $id_pelanggan, $jumlah, $total)");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Transaksi Cafe</h2>
        <form method="post">
            <label>Nama Pelanggan</label>
            <input type="text" name="pelanggan" required>
            <label>Pilih Menu</label>
            <select name="id_menu" required>
                <option value="">-- Pilih Menu --</option>
                <?php
                $menu = mysqli_query($conn, "SELECT * FROM menu");
                while ($m = mysqli_fetch_assoc($menu)) {
                    echo "<option value='{$m['id_menu']}'>{$m['nama_menu']} - Rp {$m['harga']}</option>";
                }
                ?>
            </select>
            <label>Jumlah</label>
            <input type="number" name="jumlah" min="1" required>
            <button class="btn" type="submit" name="simpan">Simpan Transaksi</button>
        </form>
        <?php if (isset($total)) : ?>
            <p class="total">Total Bayar: Rp <?= $total ?></p>
            <?php endif; ?>
            <hr>
            <h3>Riwayat Transaksi</h3>
            <table>
                <tr>
                    <th>Pelanggan</th>
                    <th>Menu</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $data = mysqli_query($conn, "SELECT t.*, p.nama_pelanggan, m.nama_menu
                FROM transaksi t
                JOIN pelanggan p ON t.id_pelanggan = p.id_pelanggan
                JOIN menu m ON t.id_menu = m.id_menu
                ORDER BY t.id_transaksi DESC");
                while ($row = mysqli_fetch_assoc($data)) {
                    echo "<tr>";
                    echo "<td>{$row['nama_pelanggan']}</td>";
                    echo "<td>{$row['nama_menu']}</td>";
                    echo "<td>{$row['jumlah']}</td>";
                    echo "<td>Rp {$row['total_bayar']}</td>";
                    echo "<td><a class='btn' href='hapus_transaksi.php?id={$row['id_transaksi']}'>Hapus</a></td>";
                    echo "</tr>";
                }
                ?>
                </table>
                <a class="btn" href="index.php">Kembali</a>
    </div>
</body>
</html>