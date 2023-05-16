<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$dosen = $_POST['dosen'];
$status = $_POST['status'];
$ket = $_POST['ket'];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO mhs VALUES('','$nim','$nama','$dosen','$status','$ket')");
 
// mengalihkan halaman kembali ke index.php
header("location:halaman.php");
 
?>