<?php
$bil1 = 100;
$bil2 = 20;
$teks1 = "PHP";
$teks2 = "php";

// Operasi logika 1
$hasil = ($bil1 <> $bil2) or ($teks1 == $teks2);
printf(
    "(%d <> %d) or (%s == %s) adalah %d<BR>\n",
    $bil1, $bil2, $teks1, $teks2, $hasil
);

// Operasi logika 2
$hasil = !($teks1 == $teks2);
printf(
    "!(%s == %s) adalah %d<BR>\n",
    $teks1, $teks2, $hasil
);
?>
