<?php
$kalimat = "untuk menjadi programmer yang handal diperlukan pengorbanan yang besar dan usaha yang keras. programmer itu bukan soal koding, tapi soal memberikan solusi. perlu diingat selalu, programmer itu membuat kode bukan hanya untuk bisa di mengerti oleh komputer, tapi juga harus dimengerti oleh programmer lain.";
function uppercase($kalimat)
{
    // hitung jumlah karakter
    $jumlah = 0;
    while (@$kalimat[$jumlah]) {
        $jumlah++;
        // return $jumlah;
    }
    for ($i = 0; $i < $jumlah; $i++) {
        if ($kalimat[$i] == ".") {

        }
    }
    return $jumlah;
}
$hasil = uppercase($kalimat);
echo $hasil;

function kataProgrammer()
{

}

function jumlahKataPerkalimat()
{

}
