<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>
<center>
        <form action="<?=  base_url('Datamahasiswa/cetak');?>" method="post">
        <table>
            <tr>
                <th colspan="3">
                    Form Input data mahasiswa
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>
                    NIS
                </th>
                <th>:</th>
                <td>
                    <input type="text" name="nis" id="nis">
                </td>
                <td><div><?= form_error('nis') ?> </div></td>
            </tr>
            <tr>
                <th>
                    Nama Mahasiswa
                </th>
                <th>:</th>
                <td>
                    <input type="text" name="nama" id="nama">
                </td>
                <td><div><?= form_error('nama') ?> </div></td>
            </tr>
            <tr>
                <th>
                    Kelas
                </th>
                <th>:</th>
                <td>
                    <input type="text" name="kelas" id="kelas">
                </td>
                <td><div><?= form_error('nis') ?> </div></td>
            </tr>
            <tr>
                <th>
                    tanggal lahir
                </th>
                <th>:</th>
                <td>
                    <input type="date" name="tgl" id="tgl">
                </td>
                <td><div><?= form_error('nis') ?> </div></td>
            </tr>
            <tr>
                <th>
                    Tempat Lahir
                </th>
                <th>:</th>
                <td>
                    <input type="text" name="tmpt" id="tmpt">
                </td>
                <td><div><?= form_error('nis') ?> </div></td>
            </tr>
            <tr>
                <th>
                    Alamat
                </th>
                <th>:</th>
                <td>
                    <input type="text" name="alamat" id="alamat">
                </td>
                <td><div><?= form_error('nis') ?> </div></td>
            </tr>
            <tr>
                <th>
                    Jenis Kelamin
                </th>
                <th>:</th>
                <td>
                <input type="radio" name="jenis_kelamin" value="laki-laki" /> Laki-laki
                <input type="radio" name="jenis_kelamin" value="Perempuan" /> Perempuan
                </td>
            </tr>
            <tr>
                <th>
                    SKS
                </th>
                <th>:</th>
                <td>
                    <select name="sks" id="sks">
                        <option value="">Pilih SKS</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
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