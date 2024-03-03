<!DOCTYPE html>
<html lang="en">
<head>
    <title>Perpustakaan | SMK NEGERI 2 DEPOK</title> 
</head>
<body>
    <h2><center>Aplikasi Perpustakaan</center></h2>
    <h2><center>SMK NEGERI 2 DEPOK</center><h2>
    <?php
        if(isset($_GET['pesan']))
        {
            if($_GET['pesan']=='gagal')
        {
            echo "Gagal Login";
        }
        else
        if($_GET['pesan']=='logout')
        {
            echo "anda suda logout";
        }
        if($_GET['pesan']=='belum login')
        {
            echo "anda harus login";
        }
    }
?>
    <form method="post" action="proses-login.php" name="formlogin">
        <table align="center">
            <tr>
                <td>Username</td>
                <td><input type="text" name="nama" placeholder="input username"></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="password" name="password" placeholder="input password"></td>
                    </tr>
                    <tr>
                            <td></td>
                            <td><input type="submit" name="submit" value="LOGIN"></td>
                            </tr>
                </table>
            </form>
    </body>
</html>