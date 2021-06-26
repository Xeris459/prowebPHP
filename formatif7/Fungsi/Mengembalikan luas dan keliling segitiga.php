<?php 
 function luassegit($als, $tgg){
     $luas =  0.5 * $als * $tgg;
     return $luas;   
}
function kelgsegit($a, $b, $c){
    $keliling = $a + $b + $c;
    return $keliling;
}

echo "Diketahui data sebuah segitiga sebagai berikut";
$alas = 10;
$tinggi = 5;
$sisia = 4;
$sisib = 5;
$sisic = 6;

echo "<br>Alas = $alas";
echo "<br>Tinggi = $tinggi";
echo "<br>Sisi A = $sisia";
echo "<br>Sisi B = $sisib";
echo "<br>Sisi C = $sisic";
echo "<hr>";
echo "Luas segitiga = " .luassegit($alas, $tinggi);
echo "<br>Kelling segitiga = " .kelgsegit($sisia, $sisib, $sisic);
?>