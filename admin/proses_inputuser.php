<?php
    include '../koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama_user = $_POST['nama_user'];
    $level = $_POST['level'];
    
    mysqli_query($konek, "insert into user values (NULL, '$nama_user', '$username', '$password', '$level')");
    header("location:user.php");