<?php
$koneksi = mysqli_connect("localhost","root","","login");
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$password=$_POST['password'];

$queri=mysqli_query($koneksi,"INSERT INTO datauser(nik,nama,email,password) VALUES ('$nik','$nama','$email','$password')");

if (!$queri) {
    
    echo mysqli_error($koneksi);
    
}else{
    echo ("<script language='javascript'>
    window.alert('YEYY BERHASIL!!')
    window.location.href='login.html';
    </script>");
}
    

    ?>