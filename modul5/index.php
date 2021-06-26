<html>

<head>
    <title>toko film serba ada</title>
</head>

<body>
    <center>
        <h2>Selamat Datang di Toko Film Serba ada</h2>
        <hr>
    </center>
    <p>
    <h3>Pilih kategori film yang anda cari</h3>
    </p>
    <ul>
        <?php
        include ("koneksi.php");

        $query = "SELECT DISTINCT jenis FROM dvd";
        $hasil_mysql = mysqli_query($sambungan, $query);

        while($baris = mysqli_fetch_row($hasil_mysql))
        {
        $jenis = $baris[0];
        echo ("<li> <a href=kategori.php?jenis=$jenis>$jenis</a>");
        }
        ?>
    </ul>
    <center>
        <hr><a href=kelola01.php>pengelolaan</a><br>
        Alamat : Jl. Pelan 2 Banyak Anak-Anak<br>
        e-mail : <a href=mailto:dvdstore@serba-ada.com>dvdstore@ serbaada.com</a>
    </center>
</body>

</html>