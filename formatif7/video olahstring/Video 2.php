<?php

echo "Latihan Explode<br>";

$data = "Selamat datang di STITEK BONTANG";

$pisah = explode(" ", $data);

print_r($pisah);

echo "Data pertama adalah " .$data[0];
?>