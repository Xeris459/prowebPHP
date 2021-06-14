<html>

<head>
    <title>Cek bulan</title>
</head>

<body>
    <form action="" method="post">
        Masukan Angka bulan :
        <input required type="number" name="bulan" max="12" min="1">
        <button>Cek</button>
    </form>
</body>

</html>
<?php
if(isset($_POST['bulan'])){
    switch ($_POST['bulan']) {
        case 1:
            $bulan = "Januari";
            break;
        case 2:
            $bulan = "Februari";
            break;
        case 3:
            $bulan = "Maret";
            break;
        case 4:
            $bulan = "April";
            break;
        case 5:
            $bulan = "Mei";
            break;
        case 6:
            $bulan = "Juni";
            break;
        case 7:
            $bulan = "Juli";
            break;
        case 8:
            $bulan = "Agustus";
            break;
        case 9:
            $bulan = "September";
            break;
        case 10:
            $bulan = "Oktober";
            break;
        case 11:
            $bulan = "November";
            break;
        default:
            $bulan = "Desember";
            break;
    }
    
    echo '<br>Angka ' 
        . $_POST['bulan'] 
        . ' yang anda input menunjukan bulan : ' 
        . $bulan;
}
?>