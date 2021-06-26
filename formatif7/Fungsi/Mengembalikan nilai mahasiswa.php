<?php
function biodata($namamhstrm, $nimtrm, $jurasantrm){
    echo "Nama Lengkap : $namamhstrm<br>";
    echo "NIM : $nimtrm<br>";
    echo "Jurusan : $jurasantrm<br>";
}
function matakuliah($namamktrm, $kodemktrm, $dosenmktrm){
    echo "Nama Mata Kuliah : $namamktrm<br>";
    echo "Kode MK : $kodemktrm<br>";
    echo "Dosen Pengampu : $dosenmktrm";
}
function rekapnilai($tgstrm, $kuistrm, $utstrm, $uastrm){
    $nilaiakhir = (0.2*$tgstrm) + (0.2*$kuistrm) + (0.3*$utstrm) + (0.3*$uastrm);
    return $nilaiakhir;
}
$namamhskirim = "Rio Jumardi";
$nimkirim = "123080167";
$jurusankirim = "Teknik Informatika";
echo "Data Mahasiswa <br>";
biodata ($namamhskirim, $nimkirim, $jurusankirim);
$namamkkirim = "Sturuktur Data";
$kodemkkirim = "SD-375";
$dosenmkkirim = "Herri Sofyan, S.T., M.Kom.";
echo "<hr>Data Mata Kuliah<br>";
matakuliah($namamkkirim, $kodemkkirim, $dosenmkkirim);

echo "<hr> Rekap Nilai <br>";
$rttugaskirim = 78;
$rtkuiskirim = 86;
$utskirim = 65;
$uaskirim = 90;
echo "Nilai Akhir adalah ";
echo rekapnilai($rttugaskirim, $rtkuiskirim, $utskirim, $uaskirim);
?>