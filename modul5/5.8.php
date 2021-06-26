<?php
include "5.1.php";
$no_tamu =$_GET['no_tamu'];
$query=mysqli_query($konek,"DELETE FROM tamu where no_tamu=$no_tamu");
if($query)
{
    echo "Proses hapus berhasil, ingin lihat hasil 
    <a href='5.7.php'> disini </a>";
}
else 
{
    echo "Proses Input gagal";
}
?>