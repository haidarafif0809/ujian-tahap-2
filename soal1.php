<?php
$kalimat = "untuk menjadi programmer yang handal diperlukan pengorbanan yang besar dan usaha yang keras. programmer itu bukan soal koding, tapi soal memberikan solusi. perlu diingat selalu, programmer itu membuat kode bukan hanya untuk bisa di mengerti oleh komputer, tapi juga harus dimengerti oleh programmer lain.";
function uppercase($kalimat)
{
    $kalimat_array   = [];
    $kalimat_array[] = explode(".", $kalimat);

    print_r($kalimat_array);
}
uppercase($kalimat)
?>
