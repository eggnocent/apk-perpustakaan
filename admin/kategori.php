<table style = "border1">
    <tr>
        <td>Kode Kategori</td>
        <td>Nama Kategori</td>
    </tr>
    <tr>
        <?php
        include '../cekkoneksi.php';
        $data = mysqli_query($konek,"SELECT * FROM kategori");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $d['kd_kategori']; ?></td>
            <td><?php echo $d['nm_kategori']; ?></td>
        </tr>
        <?php
        }?>
</table>