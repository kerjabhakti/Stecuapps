<?php
require_once 'conn.php';

function query($query) {
    global $koneksi;
    $result= mysqli_query($koneksi, $query);
    $row = [];
    while($tampil = mysqli_fetch_assoc($result)) {
     $row[] = $tampil;
    }
    return $row;
}

$SelectKaryawan = query("SELECT * FROM Karyawan ORDER BY IdKaryawan DESC");

function tambah($data) {
    global $koneksi;

    $NamaKaryawan = $data["NamaKaryawan"];
    $Posisi = $data["Posisi"];
    $Status = $data["Status"];

    mysqli_query($koneksi,
        "INSERT INTO Karyawan (NamaKaryawan, Posisi, Status)
         VALUES ('$NamaKaryawan', '$Posisi', '$Status')"
    );

    return mysqli_affected_rows($koneksi);
}


