<?php
function biodata($namamhs, $nim, $jurusan){
    echo "Nama Lengkap : $namamhs <br>";
    echo "NIM : $nim <br>";
    echo "Jurusan : $jurusan <br>";
}
function matakuliah($namamk, $kodemk, $dosenmk){
    echo "Nama mata kuliah : $namamk<br>";
    echo "Kode MK : $kodemk<br>";
    echo "Dosen Pengampu : $dosenmk";
}
echo " Data Mahasiswa <br>";
biodata("Rio Jumardi", "123080167", "Teknik Informatika");
echo "<hr> Data Mata Kuliah <br>";
matakuliah("Pemrograman Web", "PW-356", "Hasfsah, S.Si., M.T.");
?>