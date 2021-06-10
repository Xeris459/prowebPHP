<html>
    <head>
        <title>Pengulangan</title>
    </head>
    <body>
        <?php 
            $tanggal = date('d F Y');
            /* script pengenalan pengulangan */
            echo "$tanggal <br>";
            for ($count=1; $count <= 4; $count++) { 
                echo "Anda adalah calon webmaster<br>";
            }
        ?>
    </body>
</html>