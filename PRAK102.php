<?php

    $jari_jari = 4.2;
    $tinggi = 5.4;
    $panjang = 8.9;
    $lebar = 14.7;
    $sisi = 7.9;

    $luas_alas = 0.5 * $sisi * $sisi;
    $volume = $luas_alas * $tinggi;

    echo  number_format($volume, 3) . " m3";
?>