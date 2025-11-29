<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "latihan1"; 

$conn = mysqli_connect($host, $user, $pass, $db);

if ($conn === false) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>