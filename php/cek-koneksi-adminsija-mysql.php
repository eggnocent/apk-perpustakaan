<?php
    $koneksi = mysqli_connect('localhost','root','root');

    if ($koneksi)
    {
        echo "Koneksi dengan MySQL berhasil";
    }
    else
    {
        echo "Koneksi dengan MySQL gagal";
    }
?>