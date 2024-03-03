<?php
$link = mysqli_connect('localhost', 'adminsija','123');

if ($link)
    {
    echo "koneksi dengan MySQL berhasil";
    }
else
    {
        die("Koneksi dengan MySQL gagal");
        echo "pesan ini tidak akan pernah ditampilkan";
    }
echo "<br />";
echo "<br />";

$result = mysqli_query($link, 'SHOW DATABASES') or die(mysqli_error());

while ($row = mysqli_fetch_row($result))
    {
        echo $row[0];
        echo "<br />";
    }
    ?>