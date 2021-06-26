<?php

function hello($nama){
    echo "Selamat Datang $nama Didunia WebMaster";
    echo "<br> Panggil fungsi dalam fungsi<br>";
    echo "Hasil perhitungan adalah : " .hitung(10, 6);
}

function hitung($nilai1, $nilai2){
    $hasil = $nilai1 + $nilai2;
    return $hasil;
}
echo "Bagian Pemanggil Fungsi <br>";
hello ("Rio");
echo "<hr>";

echo "<br>Panggil Fungsi Lagi <br>";
hello("Jumardi");
echo "<hr>";
echo "<br> Panggil fungsi return<br>";
echo "Hasil perhitungan adalah : " . hitung(5, 6);
?>