<html>

<head>
    <title>pengelolaan data toko film serba ada</title>
</head>

<body>
    <center>
        <h2>pengelolaan data toko film serba ada</h2>
        <hr>
    </center>
    <?php
    include("koneksi.php");
    $action         = $_POST['action'];
    $judul          = $_POST['judul'];
    $jenis          = $_POST['jenis'];
    $nama_gmb       = $_POST['nama_gmb'];
    $sutradara      = $_POST['sutradara'];
    $pemain_utama   = $_POST['penulis'];
    $harga          = $_POST['harga'];
    $sekilas        = $_POST['sekilas'];
    $thn_terbit     = $_POST['thn_terbit'];

    switch($action)
    {
        case "TAMBAH":
            $query          = "INSERT INTO dvd (judul,jenis,nama_gmb,sutradara, pemain_utama,harga,sekilas,thn_terbit)";
            $query          .= "VALUES ('$judul','$jenis','$nama_gmb','$sutradara', '$pemain_utama','$harga','$sekilas','$thn_terbit')";
            $hasil_mysql    = mysqli_query($sambungan, $query);
            
            $pesan          = "data berhasil ditambahkan";
            break;
        case "UBAH":
            $id_film     = $_POST['id_film'];

            $query       = "UPDATE dvd SET judul='$judul',jenis='$jenis',";
            $query       .= "nama_gmb='$nama_gmb',sutradara='$sutradara',";
            $query       .= "pemain_utama='$pemain_utama',sekilas='$sekilas',";
            $query       .= "harga='$harga',thn_terbit='$thn_terbit' ";
            $query       .= "WHERE id_film = $id_film";
            $hasil_mysql = mysqli_query($sambungan, $query);

            $pesan       = "data berhasil diubah";
        break;
        case "HAPUS":
            $id_dvd        = $_POST['id_film'];

            $query          = "DELETE FROM dvd WHERE id_film like $id_dvd";
            $hasil_mysql    = mysqli_query($sambungan, $query);
            
            $pesan          = "data berhasil dihapus";
            break;
    }
    echo "<h3>$pesan</h3>";
    echo "<a href='kelola01.php'>kembali ke halaman pengelola</a>"
    ?>