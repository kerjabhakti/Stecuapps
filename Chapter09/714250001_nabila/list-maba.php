<?php
include("config.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Pendaftar Barista</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Data Pendaftar Barista Café</h2>

<table>
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Posisi</th>
    <th>Status</th>
    <th>Aksi</th>
</tr>

<?php
$no = 1;
$sql = "SELECT * FROM pendaftaran";
$query = mysqli_query($db, $sql);

while ($data = mysqli_fetch_assoc($query)) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['posisi']."</td>";
    echo "<td>".$data['status']."</td>";
    echo "<td>
            <a class='btn-terima' href='status.php?id=".$data['id']."&aksi=terima'>Terima</a>
            <a class='btn-tolak' href='status.php?id=".$data['id']."&aksi=tolak'>Tolak</a>
            <a class='btn-edit' href='edit.php?id=".$data['id']."'>Edit</a>
            <a class='btn-hapus' href='hapus.php?id=".$data['id']."' onclick=\"return confirm('Yakin?')\">Hapus</a>
          </td>";
    echo "</tr>";
}
?>

</table>

</body>
</html>
