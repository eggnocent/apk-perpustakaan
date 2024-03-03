<table style = "border1">
    <tr>
        <td>Kode Buku</td>
        <td>Judul</td>
        <td>ISBN</td>
        <td>Pengarang</td>
        <td>jml_hal</td>
        <td>jml_stok</td>
        <td>th_terbit</td>
        <td>sinopsis</td>
        <td>gambar</td>
        <td>kategori id</td>
        <td>penerbit id</td>
    </tr>
    <tr>
        <?php
        include '../koneksi.php';
        $data = mysqli_query($konek,"SELECT * FROM buku");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $d['kd_buku']; ?></td>
            <td><?php echo $d['judul']; ?></td>
            <td><?php echo $d['isbn']; ?></td>
            <td><?php echo $d['pengarang']; ?></td>
            <td><?php echo $d['jml_hal']; ?></td>
            <td><?php echo $d['jml_stok']; ?></td>
            <td><?php echo $d['th_terbit']; ?></td>
            <td><?php echo $d['sinopsis']; ?></td>
            <td><?php echo $d['gambar']; ?></td>
            <td><?php echo $d['kategori_id']; ?></td>
            <td><?php echo $d['penerbit_id']; ?></td>
        </tr>
        <?php
        }?>
</table>