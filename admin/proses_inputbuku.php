<?php
    include '../koneksi.php';

    $kodebk = $_POST['kd_buku'];
    $judul = $_POST['judul'];
    $isbn = $_POST['isbn'];
    $pengarang = $_POST['pengarang'];
    $jml_hal = $_POST['jml_hal'];
    $jml_stok = $_POST['jml_stok'];
    $th_terbit = $_POST['th_terbit'];
    $sinopsis = $_POST['sinopsis'];
    $gambar = $_POST['gambar'];
    $kategori_id = $_POST['kategori_id'];
    $penerbit_id = $_POST['penerbit_id'];
    // $level = $_POST['pengarang'];
    // $level = $_POST['pengarang'];
    
    mysqli_query($konek, "insert into buku values (NULL, '$kodebk', '$judul', '$isbn', '$pengarang', '$jml_hal', '$jml_stok', '$th_terbit', '$sinopsis', '$gambar', '$kategori_id', '$penerbit_id' )");
    header("location:buku.php");