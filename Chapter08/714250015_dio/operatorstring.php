<?php
$teks1 = "Aku Sedang Belajar";
$teks2 = "Pemrograman WEB";
$teks3 = "PHP";

// Tanpa spasi
$hasil = $teks1 . $teks2 . $teks3;
printf("hasil : %s<BR>\n", $hasil);

// Dengan spasi di antara setiap teks
$hasil = $teks1 . " " . $teks2 . " " . $teks3;
printf("hasil : %s<BR>\n", $hasil);
?>
