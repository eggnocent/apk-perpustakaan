<table style = "border1">
    <tr>
        <td>Username</td>
        <td>Nama User</td>
        <td>Level</td>
    </tr>
    <tr>
        <?php
        include '../koneksi.php';
        $data = mysqli_query($konek,"SELECT * FROM user");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $d['username']; ?></td>
            <td><?php echo $d['nama_user']; ?></td>
            <td><?php echo $d['level']; ?></td>
        </tr>
        <?php
        }?>
</table>