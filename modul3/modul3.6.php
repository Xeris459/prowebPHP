<html>
    <head>
        <title>Kondisional</title>
    </head>
    <body>
        <?php 
            $hari = date('l');
            if($hari == "Tuesday"){
                echo "Hari yang menyenangkan";
            } else {
                echo "Hari yang melelahkan";
            }
        ?>
    </body>
</html>