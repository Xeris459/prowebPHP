<?php 
function biodata($namamhsterima, $nimterima, $jurusanterima){
    echo "Nama Lengkap : $namamhsterima";
    echo "NIM : $nimterima";
    echo "Jurusan : $jurusanterima";
}
function matakuliah($namamkterima, $kodemkterima, $dosenmkterima){
    echo "Nama Mata Kuliah : $namamkterima";
    echo "Kode MK : $kodemkterima";
    echo "Dosen Pengampu : $dosenmkterima";
}
$namamhskirim= "Rio Jumardi";
$nimkirim = "123080167";
$jurusankirim ="Teknik Informatika";
echo " Data Mahasiswa <br>";
biodata($namamhskirim, $nimkirim, $jurusankirim);
$namamkkirim = "Riset Operasi";
$kodemkkirim = "RO-756";
$dosenmkkirim = "Juwariah, S.Si., M.T.";
echo "<hr> Data Mata Kuliah <br>";
matakuliah($namamkkirim, $kodemkkirim, $dosenmkkirim);
?>