<?php
//mengaktifkan sesion php

session_start();
// menghubungkan dengan koneksi

include "koneksi.php";

//menangkap data yang dikirimkan dari form

$username = $_POST['nama'];
$password = $_POST['password'];
//menyeleksi data admin dengan username dan password yang sesuai

$ambildata = mysqli_query($konek,"select * from user where
 username='$username' and password='$password'");

//menghitung jumlah data yang ditemukan

$cek = mysqli_num_rows($ambildata);

if($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
    header("location: admin/dashboard.php");
}else{
    header("location:index.php?pesan=gagal");
}
?>