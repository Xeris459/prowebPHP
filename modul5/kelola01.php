<html>

<head>
    <title>pengelolaan data toko film serba ada</title>
</head>

<body>
    <center>
        <h2>Pengelolaan Toko Film Serba Ada</h2>
        <hr>
        Lembar berikut digunakan untuk pengelolaan data Film.
        Untuk menambah data tekan tombol <font Color="#FF0000">TAMBAH</font>
        sedangkan untuk mengubah atau menghapus suatu data pilih terlebih
        dahulu data yang diinginkan kemudian baru tekan tombol <font color="#FF0000">UBAH</font> atau <font
            color="#FF0000">HAPUS</font>.</font>
        <form action="kelola02.php" method="post">
            <select name="id" size="6">
                <?php
                include("koneksi.php");

                $query = "SELECT * FROM dvd";
                $hasil_mysql = mysqli_query($sambungan, $query);
                
                while($baris = mysqli_fetch_row($hasil_mysql))
                {
                    $id_film        = $baris[0];
                    $judul          = $baris[1];
                    $jenis          = $baris[2];
                    $nama_gmb       = $baris[3];
                    $sutradara      = $baris[4];
                    $pemain_utama   = $baris[5];
                    $harga          = $baris[6];
                    $thn_terbit     = $baris[7];
                    echo "<option value='$id_film'>($jenis) $judul";
                }
                ?>
            </select><br><br>
            <input name="action" type="submit" value="TAMBAH">
            <input name="action" type="submit" value="UBAH">
            <input name="action" type="submit" value="HAPUS">
        </form>
        <a href="index.php">kembali ke halaman utama</a>
        <hr>
        Alamat : Jl. Pelan 2 Banyak Anak-Anak<br>
        e-mail : <a href="mailto:dvdstore@serba-ada.com">dvdstore@ serbaada.com</a>
    </center>
</body>

</html>