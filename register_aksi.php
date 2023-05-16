<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$us = $_POST['username'];
$pass = $_POST['pass'];


// menginput data ke database
mysqli_query($koneksi,"INSERT INTO user VALUES('','$us','$pass')");
 
// mengalihkan halaman kembali ke index.php
header("location:login.php");
 
?>