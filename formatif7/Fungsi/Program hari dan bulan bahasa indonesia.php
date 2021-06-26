<?php
$date = date('d');
$day = date ('l');
$month = date ('F');
$year = date ('Y');

switch($day){
		case 'Sunday':
			$hari = "Minggu";
		break;
 
		case 'Monday':			
			$hari = "Senin";
		break;
 
		case 'Tuesday':
			$hari = "Selasa";
		break;
 
		case 'Wednesday':
			$hari = "Rabu";
		break;
 
		case 'Thuesday':
			$hari = "Kamis";
		break;
 
		case 'Friday':
			$hari = "Jumat";
		break;
 
		case 'Saturday':
			$hari = "Sabtu";
		break;
		
	}
    
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

echo "Hari Ini adalah $hari, $date $bulan $year";
?>
