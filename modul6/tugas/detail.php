<html>

<head>
    <title>toko film serba ada</title>
</head>

<body>
    <center>
        <h2>Selamat Datang di Toko Film Serba Ada</h2>
        <hr>
    </center>
    <h3>Berikut ini detail film yang anda pilih</h3>
    <table border=1>
        <?php
        include ("koneksi.php");
        if(empty($_SESSION['username']))
        {
            header("location:login.php?pesan=belum_login");
        }
        $id          = $_GET['id'];
        
        $query          = "SELECT * FROM dvd WHERE id_film=$id";
        $hasil_mysql    = mysqli_query($sambungan, $query);
        $baris          = mysqli_fetch_row($hasil_mysql);

        $judul          = $baris[1];
        $jenis          = $baris[2];
        $nama_gmb       = $baris[3];
        $sutradara      = $baris[4];
        $pemain_utama   = $baris[5];
        $harga          = $baris[6];
        $sekilas        = $baris[7];
        $thn_terbit     = $baris[8];
        ?>
        <tr valign="top">
            <td><img src='./image/<?php echo $nama_gmb;?>' height='150'></td>
            <td>
                <p>
                    JUDUL<br>
                    <i><b><?php echo $judul; ?></b></i>
                </p>
                <p>
                    <i><b><?php echo $sekilas; ?></b></i>
                </p>
                <p>
                    JENIS<br>
                    <i><b><?php echo $jenis; ?></b></i>
                </p>
                <p>
                    SUTRADARA<br>
                    <i><b><?php echo $sutradara; ?></b></i>
                </p>
                <p>
                    PEMAIN UTAMA<br>
                    <i><b><?php echo $pemain_utama; ?></b></i>
                </p>
                <p>
                    HARGA<br>
                    <i><b>Rp <?php echo $harga;?></b></i>
                </p>
                <p>
                    TAHUN TERBIT<br>
                    <i><b><?php echo $thn_terbit; ?></b></i>
                </p>
            </td>
        </tr>
    </table><br>
    <a href="index.php">kembali ke halaman utama</a>
    <center>
        <hr>
        Alamat : Jl. Pelan 2 Banyak Anak-Anak<br>
        e-mail : <a href="mailto:dvdstore@serba-ada.com">dvdstore@ serbaada.com</a>
    </center>
</body>

</html>