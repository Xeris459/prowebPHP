<?php

echo "Latihan Explode<br>";

$data = "Selamat datang di STITEK BONTANG";

$pisah = explode(" ", $data);

print_r($pisah);

echo "Data pertama adalah " .$pisah[0];
echo "<br> Data Kedua adalah " .$pisah[1];

echo "<hr>";
echo "Latihan Implode<br>";

echo implode(" ", $pisah);
?>