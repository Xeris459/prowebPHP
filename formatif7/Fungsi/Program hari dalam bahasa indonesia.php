	<?php 
    $tanggal = date('d/m/y');
    $hariina = date('l');
 
	switch($hariina){
		case 'Sunday':
			$harina = "Minggu";
		break;
 
		case 'Monday':			
			$hariina = "Senin";
		break;
 
		case 'Tuesday':
			$hariina = "Selasa";
		break;
 
		case 'Wednesday':
			$hariina = "Rabu";
		break;
 
		case 'Thuesday':
			$hariina = "Kamis";
		break;
 
		case 'Friday':
			$hariina = "Jumat";
		break;
 
		case 'Saturday':
			$hariina = "Sabtu";
		break;
		
	}

 
echo "Hari ini : ".$harina.", ".$tanggal;
 
?>