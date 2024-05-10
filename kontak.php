<?php

// membuat fungsi untuk mengambil data dari JSON
function getJSON()
{
    // __DIR__ = mendapatkan alamat folder tempat membuat projek PHP

    // 1. Ambil file JSON dari direktori tempat kita membuat projek PHP
    $getFile = file_get_contents(__DIR__ . "/kontak.json");

    // 2. Konversi format JSON ke dalam array asosiatif lalu kembalikan nilainya
    return json_decode($getFile, true);
}


// menyimpan data ke dalam JSON
function saveKontak($kontak)
{
    // 1. ambil data array dari JSON dengan memanggil fungsi getJSON()
    $data = getJSON();

    // 2. masukkan data kontak ke dalam data array
    $data[] = $kontak;

    // 3. simpan data array ke dalam JSON dengan memanggil fungsi saveJSON()
    saveJSON($data);

    // 4. kembalikan data kontak
    return $kontak;
}

// membuat fungsi untuk menyimpan ke dalam JSON
function saveJSON($data)
{
    /* 
        1. Kembalikan data array ke dalam format JSON
            lalu di simpan ke dalam variabel $kontak
    */
    $kontak = json_encode($data, JSON_PRETTY_PRINT);

    /*
        2. Simpan data ke dalam file JSON
    */
    file_put_contents(__DIR__ . "/kontak.json", $kontak);
}
