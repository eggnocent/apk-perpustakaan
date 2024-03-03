<table style = "border1">
    <tr>
        <td>ID Anggota</td>
        <td>Kode Anggota</td>
        <td>Nama</td>
        <td>Jenis Kelamin</td>
        <td>Tempat Lahir</td>
        <td>Tanggal Lahir</td>
        <td>No. HP</td>
        <td>Alamat</td>
        <td>foto</td>
    </tr>
    <tr>
        <?php
        include '../koneksi.php';
        $data = mysqli_query($konek,"SELECT * FROM anggota");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <!-- <td><?php echo $d['id_anggota']; ?></td> -->
            <td><?php echo $d['kd_anggota']; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['jenis_kelamin']; ?></td>
            <td><?php echo $d['tempat_lahir']; ?></td>
            <td><?php echo $d['tgl_lahir']; ?></td>
            <td><?php echo $d['no_hp']; ?></td>
            <td><?php echo $d['alamat']; ?></td>
            <td><?php echo $d['foto']; ?></td>
        </tr>
        <?php
        }?>
</table>