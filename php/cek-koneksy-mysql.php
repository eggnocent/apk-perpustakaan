<?php
$koneksi = mysqli_connect('localhost', 'adminsija','123');

if ($koneksi)
    {
    echo "koneksi dengan MySQL berhasil";
    }
else
    {
        echo "Koneksi dengan MySQL gagal";
    }
    ?>
