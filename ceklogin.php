<?php
$nama=$_POST['nama'];
$password=$_POST['password'];

$koneksi=mysqli_connect("localhost","root","","login");

$query=mysqli_query($koneksi,"SELECT * FROM datauser WHERE nama='$nama' AND password='$password'");
$cek=mysqli_num_rows($query);

if ($cek>0)
{
    header("location:index.php");
} else {
    header("location:login.html");
}

?>