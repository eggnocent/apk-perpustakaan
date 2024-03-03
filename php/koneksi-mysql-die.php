<?php
    $link = mysqli_connect('localhot','adminsija','12345');
    if ($link)
        {
            echo "Koneksi dengan MySQL berhasil";
        }
    else
        {
            die("Koneksi dengan MySQL gagal");
            echo "Koneksi dengan MySQL gagal";
        }
?>