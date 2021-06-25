<?php
include "5.1.php";

$nama =$_POST['nama'];
$email =$_POST['email'];
$pesan =$_POST['pesan'];

$query=mysqli_query($konek,"INSERT INTO tamu VALUES('','$nama','$email','$pesan')") or die(mysqli_error($konek));
if($query)
{
   echo "Proses input berhasil, ingin lihat hasil <a href='5.3.php'> disini </a>";
}
else 
{
  echo "Proses Input gagal";
}
?>
