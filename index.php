<?php

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
    <ul>
        <li>
            <a href="">Input Data</a>
        </li>
        <li>
            <a href="output.php">Data Kontak</a>
        </li>
    </ul>

    <form method="POST">
        <table>
            <tr>
                <td>
                    <label for="nama">Nama :</label>
                </td>
                <td>
                    <input type="text" id="nama" name="nama">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email :</label>
                </td>
                <td>
                    <input type="email" id="email" name="email">
                </td>
            </tr>
        </table>

        <input type="submit" value="Kirim" name="submit">
    </form>

    <?php

    if (isset($_POST["submit"])) {
        $kontak = [
            'nama' => $_POST["nama"],
            'email' => $_POST["email"]
        ];

        $dataKontak = array_merge($kontak, $_POST);

        saveKontak($dataKontak);

        header("Location: output.php");
        exit;
    }

    ?>


</body>

</html>