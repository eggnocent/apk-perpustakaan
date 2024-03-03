<h2>INPUT DATA ANGGOTA</h2>
<form method="post" action="proses_input.php">
    <fieldset>
    <table>
    <tr>
        <td>Nama User</td>
        <td><input type="text" name="nama_user" placeholder="Nama User..."></td>
    </tr>

    <tr>
        <td>Username</td>
        <td><input type="text" name="username" placeholder="Username..."></td>
    </tr>

    <!-- <tr>
      <td>Level</td>
      <td><input type="number" name="level" placeholder="Level..."></td>
    </tr> -->
    
    <tr>
        <td>Password</td>
        <td><input type="password" name="password" placeholder="Masukan Password..."></td>
        <td><input type="checkbox" onclick="myFunction()">Show Password</td>
    </tr>
    </table>
    <label><input type="checkbox" name="ingatsaya" value="ingatsaya" /> Ingat Saya</label>
    <input type="submit" name="submit" value="Daftar" />
    </form>
    </fieldset>