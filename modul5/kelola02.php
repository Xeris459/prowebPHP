<?php
$action = $_POST['action'];
?>
<html>

<head>
    <title>pengelolaan data toko film serba ada</title>
</head>

<body>
    <center>
        <h2>Pengelolaan Toko Film Serba Ada</h2>
        <hr>
        <h3>
            <?php echo $action;?> DATA FILM
        </h3>
    </center>
    <form method='post' action='proses.php'>
        <?php
        include("koneksi.php");

        if($action == "TAMBAH")
        {
            $id_film        = "";
            $judul          = "";
            $jenis          = "";
            $nama_gmb       = "";
            $sutradara      = "";
            $pemain_utama   = "";
            $harga          = "";
            $sekilas        = "";
            $thn_terbit     = "";
        }
        else
        {
            $id             = $_POST['id'];
            $query          = "SELECT * FROM dvd WHERE id_film = '$id'";
            $hasil_mysql    = mysqli_query($sambungan, $query);
            $baris          = mysqli_fetch_row($hasil_mysql);

            $id_film        = $baris[0];
            $judul          = $baris[1];
            $jenis          = $baris[2];
            $nama_gmb       = $baris[3];
            $sutradara      = $baris[4];
            $pemain_utama   = $baris[5];
            $harga          = $baris[6];
            $sekilas        = $baris[7];
            $thn_terbit     = $baris[8];
            echo "<input type='hidden' name='id_film' value='$id'>";
        }
        echo "<input type='hidden' name='action' value='$action'>";
        ?>

        Judul Film : <input type='' text'' name='judul' size="20" maxlength="30" value="<?php echo $judul;?>">
        <br>
        Sekilas Isi : <textarea name='sekilas'><?php echo $sekilas;?></textarea>
        <br>
        Jenis Film : <input type='text' name='jenis' size="20" maxlength="20" value="<?php echo $jenis;?>">
        <br>
        Nama File Gambar : <input type='text' name='nama_gmb' size="20" maxlength="20" value="<?php echo $nama_gmb;?>">
        <br>
        Nama Sutradara : <input type='text' name='sutradara' size="30" maxlength="30" value="<?php echo $sutradara;?>">
        <br>
        Nama Pemain_Utama : <input type='text' name='penulis' size="30" maxlength="30"
            value="<?php echo $pemain_utama;?>">
        <br>
        Harga : Rp <input type='text' name='harga' size="20" maxlength="20" value="<?php echo $harga;?>">
        <br>
        Tahun Terbit : <input type='text' name='thn_terbit' size="20" maxlength="20" value="<?php echo $thn_terbit;?>">
        <br>
        <input type='submit' value="PROSES" name="submit">
    </form>
    <center>
        <hr>
        Alamat : Jl. Pelan 2 Banyak Anak-Anak<br>
        e-mail : <a href="mailto:dvdstore@serba-ada.com">dvdstore@ serbaada.com</a>
    </center>
</body>

</html>