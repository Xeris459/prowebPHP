<?php
session_start();
$database = "toko_dvd";
$hostname = "localhost";
$username = "root";
$password = "";

$sambungan = mysqli_connect($hostname, $username, $password);
mysqli_select_db($sambungan, $database);
?>