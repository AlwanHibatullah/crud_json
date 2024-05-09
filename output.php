<?php

require 'kontak.php';

$getKontak = getJSON();

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
    <ul>
        <li>
            <a href="index.php">Input Data</a>
        </li>
        <li>
            <a href="">Data Kontak</a>
        </li>
    </ul>

    <h1>Data Kontak</h1>

    <table border="1">
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
</body>

</html>