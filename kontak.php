<?php

// membuat fungsi untuk mengambil data dari JSON
function getJSON()
{
    // __DIR__ = mendapatkan alamat folder tempat membuat projek PHP
    $getFile = file_get_contents(__DIR__ . "/kontak.json");
    return json_decode($getFile, true);
}


// menyimpan data ke dalam JSON
function saveKontak($kontak)
{
    $data = getJSON();

    $data[] = $kontak;

    saveJSON($data);

    return $kontak;
}

// membuat fungsi untuk menyimpan ke dalam JSON
function saveJSON($data)
{
    $kontak = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents(__DIR__ . "/kontak.json", $kontak);
}
