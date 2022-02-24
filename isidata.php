<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$lokasi = $_POST['lokasi'];
$suhu = $_POST['suhu'];

// menginput data ke database
mysqli_query($koneksi,"INSERT INTO catatan VALUES('$tanggal','$waktu','$lokasi','$suhu')");

header("location:catatan.php");

?>