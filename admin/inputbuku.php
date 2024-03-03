<h2>INPUT DATA BUKU</h2>
<form method="post" action="proses_inputbuku.php">
    <fieldset>
    <table>
        <tr>
            <td>Kode Buku</td>
            <td><input type="int" name="kd_buku" placeholder="Kode Buku..."></td>
        </tr>

        <tr>
            <td>Judul</td>
            <td><input type="text" name="judul" placeholder="Judul..."></td>
        </tr>

        <tr>
            <td>ISBN </td>
            <td><input type="number" name="isbn" placeholder="Nomor ISBN..."></td>
        </tr>

        <tr>
            <td>Pengarang</td>
            <td><input type="text" name="pengarang" placeholder="Nama Pengarang..."></td>
        </tr>

        <tr>
            <td>Jumlah Halaman</td>
            <td><input type="number" name="jml_hal" placeholder="Jumlah Halaman..."></td>
        </tr>

        <tr>
            <td>Jumlah Stok</td>
            <td><input type="number" name="jml_stok" placeholder="Jumlah Stok..."></td>
        </tr>

        <tr>
            <td>Tahun Terbit</td>
            <td><input type="number" name="th_terbit" placeholder="Tahun Terbit"></td>
        </tr>

        <tr>
            <td>Gambar</td>
            <td><input type="file" name="foto"></td>
        </tr>
    </table>
    <label><input type="checkbox" name="ingatsaya" value="ingatsaya" /> Ingat Saya</label>
    <input type="submit" name="submit" value="Daftar" />
    </form>
    </fieldset>