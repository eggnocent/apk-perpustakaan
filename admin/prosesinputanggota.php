<?php
    include '../cekkoneksi.php';

    $id_anggota = $_POST['id_anggota'];
    $kd_anggota = $_POST['kd_anggota'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir= $_POST['tgl_lahir'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $foto = $_POST['foto'];
    mysqli_query($konek, "insert into user values ('$id_anggota', '$kd_anggota', '$nama', '$jenis_kelamin', '$tempat_lahir', '$tgl_lahir', '$no_hp', '$alamat'
    )");
    header("location:buku.php");