<!DOCTYPE html>
<html lang="en">
<head>
    <title>Perpustakaan | Admin</title>
</head>
<body>
    <h2>Login Admin</h2>
    <br/>
    <!-- pesan -->
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "Login gagal! username dan password salah!";
        }else if($_GET['pesan'] == "logout"){
            echo "anda telah berhasil logout";
        }else if($_GET['pesan'] == "belum_login"){
            echo "Anda harus login untuk mengakses halaman dasboard";
        }
    }
    ?>
    <br/>
    <br/>
    <form method="post" action="proses-login.php">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="username"></td>
            </tr>
            <tr>
                <td>password</td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="password"></td>
            </tr>
            <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="submit"></td>
            </tr>
            </table>
        </form>
</body>
</html>