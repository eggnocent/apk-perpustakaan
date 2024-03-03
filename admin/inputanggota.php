<h2>INPUT DATA ANGGOTA</h2>
<form method="post" action="proses_inputanggota.php">
    <table>
        <tr>
            <td>ID Anggota</td>
            <td><input type="number" name="id_anggota"></td>
        </tr>
        <tr>
            <td>Kode Angggota</td>
            <td><input type="text" name="kd_anggota"></td>
    </tr>
    <tr>
        <td>Nama Anggota</td>
        <td><input type="text" name="nama"></td>
    </tr>

    <tr>
        <td>Jenis Kelamin</td>
        <td><input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki
            <input type="radio" name="jenis_kelamin" value="peempuan">Perempuan</td>
    </tr>

    <tr>
        <td>Tempat Lahir</td>
        <td><input type="text" name="tempat_lahir"></td>
    </tr>

    <tr>
        <td>Tanggal Lahir</td>
        <!-- <td>
            <input type="number" name="tgl_lahir">
        <select name="tgl_lahir">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
        </select>
        <select name="tgl_lahir">
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
        <input type="number"  min="2000" max="2022" name="tgl_lahir"> -->
        <td>
        <input type="date">
        </td>

        
    </tr>

    <tr>
        <td>Nomor HP</td>
        <td><input type="number" name="no_hp"></td>
    </tr>

    <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat"></td>
    </tr>

    <tr>
        <td>Foto</td>
        <td action="aksi.php" method="post" enctype="multipart/form-data">
                <input type="file" name="file">
                <!-- <input type="submit" name="upload" value="Upload"> -->
            <!-- <input type="text" name="foto"> -->
        <!-- <input type="image" src="submit.gif" alt="Submit" style="float:right" width="48" height="48"> -->
        </td>
    </tr>

    </table>
    <input type="submit">
</from>