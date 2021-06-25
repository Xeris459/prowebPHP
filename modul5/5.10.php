<?php
include "5.1.php";

$no_tamu=$_POST['no_tamu'];
$nama =$_POST['nama'];
$email =$_POST['email'];
$pesan =$_POST['pesan'];

$query=mysqli_query(
    $konek,"UPDATE tamu 
            SET nama='$nama',email='$email',pesan='$pesan' 
            where no_tamu='$no_tamu'"
) or die(mysqli_error($konek));
if($query)
{
    echo "Proses update berhasil, ingin lihat hasil <a href='5.7.php'> disini </a>";
}
else 
{
    echo "Proses Input gagal";
}