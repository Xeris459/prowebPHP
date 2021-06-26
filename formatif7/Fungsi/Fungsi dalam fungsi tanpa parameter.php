<?php
function biodata(){
    echo "Nama Lengkap : Rio Jumardi<br>";
    echo "NIM : 123080167";
    echo "Jurusan : Teknik Informatika<br>";

    echo "<hr>Data Mata Kuliah 2<br>";
    matakuliah2();
}
function matakuliah1(){
    echo "Nama Mata kuliah : Pemrograman web<br>";
    echo "Kode MK : PW-356<br>";
    echo "Dosen pengampu : Hafsah, S.Si., M.T.";
}
function matakuliah2(){
    echo "Nama Mata kuliah : Riset operasi<br>";
    echo "Kode MK : RO-766<br>";
    echo "Dosen Pengampu : Juwairiah, S.Si., M.T.";
}
echo "Data Mahasiswa <br>";
biodata();
echo "<hr>Data mata kuliah 1 <br>";
matakuliah1();
?>