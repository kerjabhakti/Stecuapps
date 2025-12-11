<?php

$nama  = 'Al Ghani Muhammad Fadhillah'; // tanda petik satu
$pesan = "Selamat datang {$nama}"; // tanda petik dua (bisa parsing variabel)
$pesan2 = 'Selamat datang {$nama}'; // tanda petik satu (variabel tidak diproses)

# ketika di-echo
echo $pesan . '<br>';
echo $pesan2 . '<br>';

?>
