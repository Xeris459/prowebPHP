<?php 
$tanggal = date ("d/m/y");

echo "Sebelum dilakukan pemisahan teks dari variabel tanggal <br>";
echo "$tanggal";
echo "<hr>";

echo "Setelah dilakukan pemisahan teks dari variabel tanggal <br>";
$pisah = explode("/", $tanggal);

echo "Tanggal hari ini adalah " .$pisah[0];
echo "<br> Bulan ini adalah ".$pisah[1];
echo "<br> Tahun ini adalah ".$pisah[2];

echo "<hr>";

echo "Menggabungkan kembali teks yang telah dipisah <br>";
echo implode("/", $pisah);

echo "<hr>";

echo "Menggabungkan kembali teks yang telah dipisha dengan format berbeda <br>";
echo implode("-", $pisah);
?>