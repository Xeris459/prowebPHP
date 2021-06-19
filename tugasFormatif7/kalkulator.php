<?php
require('fungsi.php');

$nilai1     = $_POST['bil1'];
$nilai2     = $_POST['bil2'];
$operator   = $_POST['operator'];

if ($operator == '+') {
    $hasil = penjumlahan($nilai1, $nilai2);
} else if ($operator == '-') {
    $hasil = pengurangan($nilai1, $nilai2);
} else if ($operator == '/') {
    $hasil = pembagian($nilai1, $nilai2);
} else if ($operator == '*') {
    $hasil = perkalian($nilai1, $nilai2);
} else {
    echo "operator tidak ditemukan";
    die;
}

echo "hasil dari $nilai1 $operator $nilai2 adalah $hasil";