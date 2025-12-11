<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String dalam PHP</title>
</head>
<body>
    <?php
    $nama = 'Muhamad Ridho Ichsani'; //tanda petik satu

    $pesan = "Selamat datang {$nama}"; //tanda petik dua
    $pesan2 = 'Selamat datang {$nama}'; //tanda petik satu

    #ketika di-echo
    echo $pesan . '<br>'; # Selamat datang Anonim
    echo $pesan2 . '<br>'; # Selamat datang ($nama)
    ?>
</body>
</html>