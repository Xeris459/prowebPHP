<?php
$day = date('l');
$hari = array('Monday' => 'senin',
    'Tuesday' => 'Selasa',
    'Wednesday' => 'Rabu',
    'Thursday' => 'Kamis',
    'Friday' => 'Jumat',
    'Saturday' => 'Sabtu',
    'Sunday' => 'Minggu');

echo "Hari ini adalah hari : " .$hari[$day];

$month  = date('F');
$bulan = array('January' => 'Januari',
    'February' => 'pebruari',
    'March' => 'Maret',
    'April' => 'April',
    'May' => 'Mei',
    'June' => 'Juni',
    'July' => 'Juli',
    'August' => 'Agustus',
    'September' => 'September',
    'October' => 'oktober',
    'November' => 'Nopember',
    'December' => 'Desember'
);

echo "<br>Bulan ini adalah bulan : " .$bulan[$month];