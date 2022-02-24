<?php
$koneksi = mysqli_connect("localhost","root","","login");

//check koneksi

if (mysqli_connect_error()){
    echo "Koneksi Gagal : " . mysqli_connect_error(); 
}

?>