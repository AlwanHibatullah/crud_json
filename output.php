<?php

// panggil file kontak.php
require 'kontak.php';

// ambil data kontak dari JSON dengan memanggil fungsi getJSON(), lalu simpan ke dalam variable $getKontak
$getKontak = getJSON();

// inisialisasi nilai $index untuk penomoran table
$index = 0;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UJIKOM OUTPUT DATA</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="navbar">
        <ul>
            <li>
                <a href="index.php">Input Data</a>
            </li>
            <li>
                <a href="">Data Kontak</a>
            </li>
        </ul>
    </div>

    <div class="container-table">
        <h2>Data Kontak</h2>

        <table class="kontak">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>

            <?php foreach ($getKontak as $kontak) : ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $kontak['nama'] ?></td>
                    <td><?= $kontak['email'] ?></td>
                </tr>
            <?php $index++;
            endforeach; ?>
        </table>
    </div>
</body>

</html>