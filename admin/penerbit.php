<table style = "border1">
    <tr>
        <td>Kode Penerbit</td>
        <td>Nama Penerbit</td>
    </tr>
    <tr>
        <?php
        include '../cekkoneksi.php';
        $data = mysqli_query($konek,"SELECT * FROM penerbit");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $d['kd_penerbit']; ?></td>
            <td><?php echo $d['nm_penerbit']; ?></td>
        </tr>
        <?php
        }?>
</table>