<?php

/*
    Edi : 21,
    Budi: 19,
    Agus: 20,
    Septi: 25,
    Rudi: 18
*/

// 1. Buat array asosiatif
$array = [
    // "key" => "value"
    "Edi" => 21,
    "Budi" => 19,
    "Agus" => 20,
    "Septi" => 25,
    "Rudi" => 18
];

// 2. Urutkan array dan tampilkan dengan looping

// insertion sort 
function insertion_sort($array)
{
    // iterasi untuk setiap elemen pada array
    for ($i = 0; $i < count($array); $i++) {
        $temp = $array[$i]; // simpan elemen yang akan di sisipkan
        $j = $i - 1; // inisialisasi nilai index elemen sebelumnya

        // menukar posisi elemen dari kiri ke kanan
        while ($j >= 0 && $temp < $array[$j]) {
            $array[$j + 1] = $array[$j];
            $array[$j] = $temp;
            $j--;
        }
    }

    return $array;
}

// ambil key menggunakan array_keys()
$keys = array_keys($array);

// buat array kosong
$sorted = [];

// masukkan data yang sudah di urutkan ke dalam array $sorted
foreach (insertion_sort($keys) as $key) {
    $sorted[$key] = $array[$key];
}

print_r($sorted);


/* 

iterasi ke-1
[E,B,A,S,R];
$temp = E;
$j = -1

iterasi ke-2
[E,B,A,S,R]
$temp = B
$j = 0

setelah ditukar
[B,E,A,S,R]

iterasi ke-3
$temp = A
$j = 1

[B,A,E,S,R]

[A,B,E,S,R]

iterasi ke-4
[A,B,E,S,R]
$temp = S
$j = 2

iterasi ke-5
[A,B,E,S,R]
$temp = R
$j = 3

[A,B,E,R,S]
*/
