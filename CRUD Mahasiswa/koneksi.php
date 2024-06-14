<?php
<<<<<<< HEAD
$koneksi = mysqli_connect("localhost", "root", "", "mahasiswa_crud","3308") or die("Koneksi Gagal");
=======
$host = "localhost";
$user = "root";
$pass = "";
$db = "kuliah_pemrograman_web";
$port = "3308";

$koneksi = mysqli_connect($host, $user, $pass, $db, $port) or die(mysqli_error($koneksi));
>>>>>>> 775f00c7e4e89d26a9e19e31c3d98812886c8d46
?>
