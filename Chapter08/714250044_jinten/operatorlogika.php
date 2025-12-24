<?php
    $bil1 = 100;
    $bil2 = 20;
    $teks1 = "PHP";
    $teks2 = "php";
    $hasil = ($bil2) or ($teks1 == $teks2);
    printf ($bil1, $bil2, $teks2, $hasil);
    printf ($hasil = ! ($teks1 == $teks2));
    printf("! (%s == %s) adalah %d<BR> \n",$teks1, $teks2, $hasil);
