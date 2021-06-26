<?php 
$tanggal = date ("d/M/Y");

echo "$tanggal";
$pisah = explode("/", $tanggal);

echo "<br> Tanggal hari ini adalah " .$pisah[0];
echo "<br> Bulan hari ini adalah " .$pisah[1];
echo "<br> Tahun hari ini adalah " .$pisah[2];

?>