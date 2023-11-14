<html lang="en">
<head>
    <title>From Inpt Matakuliah</title>
</head>
<body>
    <center>
        <form action="<?=  base_url('input/cetak');?>" method="post">
        <table>
            <tr>
                <th colspan="3">
                    Form Input Data Mahasiswa
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>
                    Nama
                </th>
                <th>:</th>
                <td>
                    <input type="text" name="nama" id="nama" autofocus>
                </td>
                <td><div><?= form_error('nama') ?> </div></td>
            </tr>
            <tr>
                <th>
                    NIM
                </th>
                <th>:</th>
                <td>
                    <input type="text" name="nim" id="nim">
                </td>
                <td><div><?= form_error('nim') ?> </div></td>
            </tr>
            <tr>
                <th>
                    Kelas
                </th>
                <th>:</th>
                <td>
                    <input type="text" name="kelas" id="kelas">
                </td>
                <td><div><?= form_error('kelas') ?> </div></td>
            </tr>
            <tr>
                <th>
                    tgl Lahir
                </th>
                <th>:</th>
                <td>
                    <input type="date" name="tgl" id="tgl">
                </td>
                <td><div><?= form_error('tgl') ?> </div></td>
            </tr>
            <tr>
                <th>
                    tempat lahir
                </th>
                <th>:</th>
                <td>
                    <input type="text" name="tmpt" id="tmpt">
                </td>
                <td><div><?= form_error('tmpt') ?> </div></td>
            </tr>
            <tr>
                <th>
                    alamat
                </th>
                <th>:</th>
                <td>
                    <input type="text" name="alamat" id="alamat">
                </td>
                <td><div><?= form_error('alamat') ?> </div></td>
            </tr>
            <tr>
                <th>
                    Agama
                </th>
                <th>:</th>
                <td>
                    
                        <input type="radio" name="agama" value="Islam">Islam
                        <input type="radio" name="agama" value="kristen">kristen
                        <input type="radio" name="agama" value="konghucu">konghucu<br>
                        <input type="radio" name="agama" value="katolik">katolik
                        <input type="radio" name="agama" value="protestan">protestan
                        <input type="radio" name="agama" value="hindu">hindu
                        <input type="radio" name="agama" value="budha">budha
                    
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="submit">
                </td>
            </tr>
        </table>
        </form>   
    </center>
</body>
</html>