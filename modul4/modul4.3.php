<html>
    <head> 
        <title> Switch </title> 
    </head>
    <body>
    <?php
        $hariini = date('l');
        switch ($hariini) {
            case 'Monday':
                $hari = "Senin";
                break;
            case 'Tuesday':
                $hari = "Selasa";
                break;
            case 'Wednesday':
                $hari = "Rabu";
                break;
            case 'Thursday':
                $hari = "Kamis";
                break;
            case 'Friday':
                $hari = "Jumat";
                break;
            case 'Saturday':
                $hari = "Sabtu";
                break;
            
            default:
                $hari = "Minggu";
                break;
        }

        echo "<h3>Hari ini adalah hari <u>$hari</u></h3>";
    ?>
    </body>
</html>