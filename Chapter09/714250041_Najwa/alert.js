function alertBerhasil() {
    alert("Data berhasil disimpan!");
}

function alertGagal() {
    alert("Data gagal disimpan!");
}

function konfirmasiEdit() {
    konfirmasi = confirm("Apakah Anda yakin untuk mengedit data ini?");
    
    if (konfirmasi) {
    Headers("Location: proses-edit.php");
    } else {
    Headers("Location: list-peserta.php");
    }
}

function konfirmasiHapus() {
    konfirmasi = confirm("Apakah Anda yakin untuk menghapus data ini?");
    
    if (konfirmasi) {
    Headers("Location: hapus.php");
    } else {
    Headers("Location: list-peserta.php");
    }
}