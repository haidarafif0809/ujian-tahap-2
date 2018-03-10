<?php

function jumlahKata($text)
{
    $len = 0;
    while (@$text[$len]) {
        $len++;
    }
    return $len;
}
function kapital($text)
{
    if () {

    }
}

$text = "untuk menjadi programmer yang handal diperlukan pengorbanan yang besar dan usaha yang keras. programmer itu bukan soal koding, tapi soal memberikan solusi. perlu diingat selalu, programmer itu membuat kode bukan hanya untuk bisa di mengerti oleh komputer, tapi juga harus dimengerti oleh programmer lain.";

echo jumlahKata($text);
