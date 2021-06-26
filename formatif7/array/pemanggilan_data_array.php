<?php
echo "Pengisian data array berbaris himpunan data (Numerik) <br>";
$data = array(24,45,32,17,24);
echo "Data pada indeks ke-3 adalah : " . $data[3];
echo "<hr>";

echo "Pengisian data array berbasis Himpunan Data (Assosiatif)<br>";
$kota=[ 'Amal' => "Pontianak",
        'Aris' => "ternate",
        'Tri' => "Medan",
        'Rio' => "Bontang",
        'caca' => "Bengkulu",
];
echo "Rio Tinggal di kota " . $kota['Rio'];
echo "<hr>";

echo "Pengisian data array berbasis nomor indeks<br>";
$data[0] = 24;
$data[1] = 45;
$data[2] = 32;
$data[3] = 17;
$data[4] = 24;

echo "Data pada indeks ke-2 adalah : " . $data[2];
echo "<br>Data pada indeks ke-4 adalah : " . $data[4];
echo "<hr>";

echo "Pengisian data array berbasis kata kunci<br>";
$umur["Rio"] = 24;
$umur["Amal"] = 45;
$umur["Tri"] = 32;
$umur["caca"] = 17;
$umur["Aris"] = 24;
echo "Umur dari Tri adalah ". $umur["Tri"] ."Tahun";
echo "<br>Umur dari Aris adalah ". $umur["Aris"] ."Tahun";
echo "<hr>";