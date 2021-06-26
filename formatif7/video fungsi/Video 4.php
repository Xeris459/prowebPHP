<?php
echo "<h1>Latihan Fungsi</h1><hr>";

function hello($nama){
    echo "Selamat datang $nama didunia webmaster";
    echo "<br> Panggil fungsi dalam fungsi <br>";
echo "Hasil Perhitungan adalah : " . hitung(10, 6);
}
function hitung($nilai1, $nilai2){
    $hasil =$nilai1 + $nilai2;
    return $hasil;
}
echo "Bagian pemanggil fungsi<br>";
hello("Rio");

echo "Panggil fungsi lagi<br>";
hello("Jumardi"); 

echo "<br> Panggil fungsi return<br>";
echo "Hasil Perhitungan adalah : " . hitung(5, 6);
?>