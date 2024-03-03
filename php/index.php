<!DOCTYPE html>
<html>
<head>
    <title>Perpustakaan | Admin</title>
</head>
<body>
    <h2>Login Admin</h2>
    <br/>
    <!-- Pesan --> 
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "Login gagal! username dan password salah!";
        }else if($_GET['pesan'] == "logout"){
            echo "Anda telah berhasil logout";
        }else if($_GET['pesan'] == "belum login") {
            echo "Anda harus login untuk mengakses halaman dashboard";
        }
    }
    ?>
    <br/>
    <br/>
    <from method="post" action="proses-login.php">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="submit"></td>
            </tr>
        </table>
    </from>
</body>
</html>