<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Sepatu</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<header>
    <h3>Data Sepatu</h3>
</header>

<nav>
    <a href="form-tambah.php">[+] Tambah Sepatu</a>
</nav>

<br>

<table border="1">
<thead>
<tr>
    <th>ID</th>
    <th>Nama Sepatu</th>
    <th>Merk</th>
    <th>Ukuran</th>
    <th>Warna</th>
    <th>Harga</th>
</tr>
</thead>
<tbody>

<?php
$sql = "SELECT * FROM sepatu";
$query = mysqli_query($db, $sql);

while($data = mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>".$data['id']."</td>";
    echo "<td>".$data['nama_sepatu']."</td>";
    echo "<td>".$data['merk']."</td>";
    echo "<td>".$data['ukuran']."</td>";
    echo "<td>".$data['warna']."</td>";
    echo "<td>".$data['harga']."</td>";
    echo "<td>";
    echo "<a href='form-edit.php?id=".$data['id']."'>Edit</a> | ";
    echo "<a href='hapus.php?id=".$data['id']."'>Hapus</a>";
    echo "</td>";
    echo "</tr>";
}
?>

</tbody>
</table>

<p>Total: <?php echo mysqli_num_rows($query) ?></p>

</body>
</html>
