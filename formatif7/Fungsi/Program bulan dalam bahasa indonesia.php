<?php
$month = date ('F');

if ($month == "January"){
    $bulan = "Januari";
}elseif ($month == "Febuary"){
    $bulan = "Febuari";
}elseif ($month == "March"){
    $bulan = "Maret";
}elseif ($month == "April"){
    $bulan = "April";
}elseif ($month == "May"){
    $bulan = "Mei";
}elseif ($month == "June"){
    $bulan = "Juni";
}elseif ($month == "July"){
    $bulan = "Juli";
}elseif ($month == "August"){
    $bulan = "Agustus";
}elseif ($month == "September"){
    $bulan = "September";
}elseif ($month == "October"){
    $bulan = "Oktober";
}elseif ($month == "December"){
    $bulan = "Desember";
}

echo "Bulan ini adalah Bulan $bulan"
?>
