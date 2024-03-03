<?php
    //mulai session
    session_start();

    //cek status sudah login
    if($_SESSION['status']!="login")
    {
        header("location:../index.php?pesan=belum_login");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="perpustakaan.css">
<title>Perpustakaan Faizal 11 SIJA A</title>
</head>
<body>

<div id="container">   
<div class="header"><img src="../images/logoheader.png" width="100" height="100"><h1>Perpustakaan Faizal 11 SIJA A</h1>
    <form>
        <input class="search" type="#" placeholder="Cari..." required>
        <input class="button" type="submit" value="Cari">		
    </form>
</div>


<div class="main">
<div class="left">
<h3 align="center">MENU</h3>
<ul>
<li><a href="#">Home</a></li>
<li><a href="../proses-login.php">Logout</a></li>
<li><a href="../html/daftarbuku.html">Daftar Buku</a></li>
<div class="menu-malasngoding">
 
		<ul>
			<center>
			<li class="dropdown"><a href="#">Menu 3</a>
				<ul class="isi-dropdown">
					<li><a href="inputuser.php">User</a></li>
					<li><a href="user.php">Tabel User</a></li>
					<li><a href="buku.php">Tabel buku</a></li>
					<li><a href="inputbuku.php">buku</a></li>
					<li><a href="inputanggota.php">anggota</a></li>
					<li><a href="anggota.php">Tabel Anggota</a></li>
					<li><a href="../inputkategori.php">Kategori</a></li>
					<li><a href="../inputpenerbit.php">Penerbit</a></li>
				</ul>
			</li>
			</center>
		</ul>
 
	</div>
</ul>
</div>

<div class="middle">
<h3 align="center">Selamat Datang di Website Perpustakaan Faizal 11 SIJA A</h3>
<h2 align="center">Selamat Membaca</h2><br>
<div align="center">
<img src="../images/Buku.png" width="240" >
</div>
<p><a href="#">Baca Selengkapnya >></a></p>
</div>

<div class="right">
<h3 align="center">BUKU TERPOPULER</h3>
<ul>
<li><a href="../html/daftarbuku.html">Pelajaran Sekolah</a></li>
<li><a href="../html/malinkundang.html">Cerita Rakyat</a></li>
<li><a href="../html/daftarbuku.html">Database</a></li>

</ul>
</div>

</div>
</div>
<div class="footer"><p align="center">Copyright © Perpustakaan Faizal 11 SIJA A</a></p>
</div>
</div>
</body>
</html>

