<?php 
// // mengaktifkan session php
// session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$us = $_POST['username'];
$pass = $_POST['pass'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$us' AND pass='$pass'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $us;
	$_SESSION['status'] = "login";
	header("location: halaman.php");
}else{
	header("location: login.php");
}
?>