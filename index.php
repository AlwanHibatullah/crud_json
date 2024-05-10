<?php

// panggil file kontak.php
require 'kontak.php'

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UJIKOM INPUT DATA</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="navbar">
        <ul>
            <li>
                <a href="">Input Data</a>
            </li>
            <li>
                <a href="output.php">Data Kontak</a>
            </li>
        </ul>
    </div>

    <div class="container">
        <h2>Input Data</h2>
        <form method="POST">
            <div class="form-group">
                <label for="nama">Nama :</label>
                <input type="text" id="nama" name="nama">
            </div>

            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email">
            </div>

            <input type="submit" value="Kirim" name="submit">
        </form>
    </div>

    <?php

    // 1. Cek apakah tombol submit sudah di klik
    if (isset($_POST["submit"])) {
        // 2. Simpan data dari form ke dalam variabel $kontak
        $kontak = [
            'nama' => $_POST["nama"],
            'email' => $_POST["email"]
        ];

        // 3. Satukan array $kontak dan $_POST ke dalam variable $dataKontak
        // dengan bantuan fungsi array_merge()
        $dataKontak = array_merge($kontak, $_POST);

        // 4. Panggil fungsi saveKontak() untuk menyimpan data kontak
        saveKontak($dataKontak);

        // 5. Arahkan ke halaman output.php
        header("Location: output.php");
        exit;
    }

    ?>


</body>

</html>