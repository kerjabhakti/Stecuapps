<?php
    $nama = 'Roni Andaarsyah' ; //tanda petik satu

    $pesan = "Selamat datang {$nama}"; //tanda petik dua
    $pesan2 = 'Selamat datang {$nama}'; //tanda petik satu

    # ketika di-echo
    echo $pesan . '<br>'; # Selamat datang Nurul Huda
    echo $pesan2 . '<br>' ; # Selamat datang {$nama}