<?php
$str = "untuk menjadi programmer yang handal diperlukan pengorbanan yang besar dan usaha yang keras. programmer itu bukan soal koding, tapi soal memberikan solusi. perlu diingat selalu, programmer itu membuat kode bukan hanya untuk bisa di mengerti oleh komputer, tapi juga harus dimengerti oleh programmer lain";

function hitungChar($arg)
{
    $jumlah = 0;
    while (@$arg[$jumlah] != '') {
        $jumlah++;
    }
    return $jumlah;
}

function pisahkan($denganApa, $strNya)
{
    $array = [];
    $no    = 0;
    for ($i = 0; $i < hitungChar($strNya); $i++) {
        if ($strNya[$i] != $denganApa) {
            @$array[$no] .= $strNya[$i];
        } else {
            $no++;
            continue;
        }

    }
    return $array;
}

function upperChar($arg)
{
    $upper = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    $lower = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $no    = 0;
    while (@$upper[$no] != '') {
        if ($lower[$no] == $arg[0]) {
            $arg[0] = $upper[$no];
            break;
        }
        $no++;
    }
    return $arg;
}
function upperSen($arg)
{
    $sentenses = pisahkan(".", $arg);
    $words     = pisahkan(" ", $arg);
}
$arKalimat = pisahkan(".", $str);

print_r(upperSen($str));
