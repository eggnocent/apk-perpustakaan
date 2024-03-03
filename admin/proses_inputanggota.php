<?php
include '../koneksi.php';

$idanggota = $_POST['id_anggota'];
$kd_anggota = $_POST['kd_anggota'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$foto = $_POST['foto'];


// $insert = 
mysqli_query($konek, "insert into anggota values (NULL, '$idanggota', '$kd_anggota', '$nama', '$jenis_kelamin', '$tempat_lahir','$tgl_lahir', '$no_hp', '$alamat', '$foto')");
header("location:anggota.php");
?>