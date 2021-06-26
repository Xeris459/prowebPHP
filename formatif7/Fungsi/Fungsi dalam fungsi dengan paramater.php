<?php
function biodata($namamhstrm, $nimtrm, $jurusamtrm){
    echo "Nama Lengkap : $namamhstrm<br>";
    echo "NIM : $nimtrm<br>";
    echo "Jurusan : $jurusamtrm<br>";

    $namamkkirim = "Struktur Data";
    $kodemkkirim = "SD-376";
    $dosenmkkirim = "Harri Sofyan, S.T., M.Kom.";
    echo "<hr>Data Mata Kuliah <br>";
    matakuliah($namamkkirim, $kodemkkirim, $dosenmkkirim);
}

function matakuliah($namamktrm, $kodemktrm, $dosenmktrm){
    echo "Nama Mata Kuliah : $namamktrm<br>";
    echo "Kode MK : $kodemktrm<br>";
    echo "Dosen Pengampu : $dosenmktrm";

    echo "<hr> Rekap Nilai <br>";
    $rttugaskirim = 78;
    $rtkuiskirim = 86;
    $utskirim = 65;
    $uaskirim = 90;
    echo "Nilai Akhir adalah ";
    echo rekapnilai($rttugaskirim, $rtkuiskirim, $utskirim, $uaskirim);
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
?>
