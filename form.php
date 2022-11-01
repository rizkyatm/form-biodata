<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table border="1" bordercolor="red">
        <tr>
            <td>
                <center>
                    <h2>Form Input Biodata</h2>
                </center>
            </td>
        </tr>
        <tr>
            <td>
                <form method="POST" action="index.php" name="fm-input">
                    <table>
                        <tr>
                            <td><label for="nama">Nama </label></td>
                            <td>:</td>
                            <td><input type="text" size="20" name="namalengkap" id="nama" /></td>
                        </tr>
                        <tr>
                            <td><label for="tll">Email</label></td>
                            <td>:</td>
                            <td>
                                <input type="text" size="20" name="namaemail" />
                            </td>
                        </tr>
                        <tr>
                            <td><label for="alamat">Alamat</label></td>
                            <td>:</td>
                            <td><textarea name="namaalamat" id="alamat" cols="40" rows="3"></textarea></td>
                        </tr>
                        <tr>
                            <td><label for="telp">No. Telp/HP</label></td>
                            <td>:</td>
                            <td><input type="text" size="20" name="telp" id="telp" /></td>
                        </tr>
                        <tr>
                            <td><label for="jkl">Jenis Kelamin</label></td>
                            <td>:</td>
                            <td>
                                <input type="radio" name="namajkl" value="Laki-Laki" id="laki" />
                                <label for="laki">LakiLaki</label>
                                <input type="radio" name="namajkl" value="Perempuan" id="perempuan" />
                                <label for="perempuan">Perempuan</label>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="sekolah">sekolah</label></td>
                            <td>:</td>
                            <td><input type="text" size="20" name="namasekolah" id="sekolah" /></td>
                        </tr>
                        <tr>
                            <td><label for="kelas">kelas</label></td>
                            <td>:</td>
                            <td><input type="text" size="20" name="namakelas" id="kelas" /></td>
                        </tr>
                        <tr>
                            <td><label for="Jurusan">Jurusan</label></td>
                            <td>:</td>
                            <td>
                                <input type="radio" name="namajurusan" id="PPLG" value="PPLG" />
                                <label for="PPLG">PPLG</label>
                                <input type="radio" name="namajurusan" id="MM" value="MM" />
                                <label for="MM">MM</label>
                                <input type="radio" name="namajurusan" id="TEI" value="TEI" />
                                <label for="TEI">TEI</label>
                                <input type="radio" name="namajurusan" id="TKJ" value="TKJ" />
                                <label for="TKJ">TKJ</label>
                                <input type="radio" name="namajurusan" id="BC" value="BC" />
                                <label for="BC">BC</label>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" value="Submit" />
                                <input type="reset" name="reset" value="Clear!" />
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>