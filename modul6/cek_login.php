<?php
session_start();

$query=new mysqli('localhost', 'root', '', 'akademik');

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($query,"select * from admin where
username='$username' and password='$password'") or die (mysqli_error($query));

$cek = mysqli_num_rows($data);

if($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:session.php");
}else{
    header("location:index.php?pesan=gagal");   
} ?>