<html>

<head>
    <title>toko film serba ada</title>
</head>

<body>
    <center>
        <h2>Selamat Datang di Toko Film Serba ada </h2>
        <hr>
    </center>
    <?php
    include ("koneksi.php");
    $jenis         = $_GET['jenis'];

    echo ("<h3>Berikut ini daftar film berdasarkan kategori $jenis</h3>");
    echo ("<table border=1>");

    $query       = "SELECT id_film,judul,nama_gmb,sutradara FROM dvd ";
    $query       .= "WHERE jenis='$jenis'";
    $hasil_mysql = mysqli_query($sambungan, $query);

    while($baris = mysqli_fetch_row($hasil_mysql))
    {
        $id_film    = $baris[0];
        $judul      = $baris[1];
        $nama_gmb   = $baris[2];
        $sutradara  = $baris[3];
        echo "<tr>
                    <td>
                        <img src=./image/$nama_gmb height=50>
                    </td>";
        echo "     <td>
                        <b>
                            <a href=detail.php?id=$id_film>$judul</a>
                        </b>
                        <br>$sutradara
                    </td>
                </tr>";
    }
    echo "</table>";
    ?>
    <a href="index.php">kembali ke halaman utama</a>
    <center>
        <hr>
        Alamat : Jl. Pelan 2 Banyak Anak-Anak<br>
        e-mail : <a href=mailto:dvdstore@serba-ada.com>dvdstore@ serbaada.com</a>
    </center>
</body>

</html>