<?php
$bil1 = 100;
$bil2 = 20;
$teks1 = "PHP";
$teks2 = "php";

$hasil = ($bil1 < $bil2) or ($teks1 == $teks2);
printf ("(\$bil1 < \$bil2) or (\$teks1 == \$teks2) adalah %d<BR>\n", $hasil);

$hasil = $bil2;
printf ("\$bil2 adalah %d <BR>\n", $hasil);

$hasil = ($bil1 < $bil2) && ($teks1 != $teks2);
printf ("(\$bil1 < \$bil2) && (\$teks1 != \$teks2) adalah %d<BR>\n", $hasil);

$hasil = ($bil1 < $bil2) XOR ($teks1 == $teks2);
printf ("(\$bil1 < \$bil2) XOR (\$teks1 == \$teks2) adalah %d<BR>\n", $hasil);
?>