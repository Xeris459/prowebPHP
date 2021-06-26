<?php 
$teks = "Selamat datang di kota kupang";
$ganti = str_replace("kupang", "Bontang", $teks);

echo "Teks sebelum dilakukan pergantian kata : <br>";
echo $teks;

echo "<hr>";

echo "Teks setelah dilakukan pergantian kata : <br>";
echo $ganti;

?>