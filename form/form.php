<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form biodata</title>
</head>
<body>
    <h2>form data</h2>
    <form method="POST" action="">
    <table>
        <tr>
            <td>Nama </td>
            <td> :
                <input type="text" name="nama"><br>
        </tr>
        <tr>
        <tr>
            <td>Tempat Lahir</td>
            <td> :
            <input type="text" name="tempat"><br>
        </tr>
        <tr>
            <td>tanggal lahir </td>
            <td> :
        <input type="date" name="tanggal"><br>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:
    <input type="radio" name="jenis" value="aww" checked="checked">Perempuan
    <input type="radio" name="jenis" value="lalaki" checked="checked" >Laki-Laki
        </tr>
        <tr>
            <td>Alamat</td>
            <td> :
        <textarea name="alamat"> </textarea><br>
        </tr>
            <td>Agama </td>
            <td> :
                <select name="agama">
                    <option value="islam">islam</option>
                    <option value="hindu">hindu</option>
                    <option value="katolik">katolik</option>
                </select>
        </tr>
        <tr>
            <td>Pendidikan terakhir</td>
            <td> :
            <select name="pendidikan">
                    <option value="sd">sd</option>
                    <option value="smp">smp</option>
                    <option value="sma/smk">sma/smk</option>
                </select>
        </tr>
        <tr>
            <td>status </td>
            <td> :
            <select name="status">
                    <option value="sekolah">sekolah</option>
                    <option value="menikah">menikah</option>
                    <option value="belum menikah">belum menikah</option>
                </select>


        </tr>
        <tr>
            <td>Hobi : </td>
            <td>:
            <input type="checkbox" name="hobi" value="mancing" checked="checked">MANCING
            <input type="checkbox" name="hobi" value="maen ml" checked="checked ">MAEN ML
            <input type="checkbox" name="hobi" value="maen raket" checked="checked">MAEN RAKET
        </tr>
        <tr>
            <td>cita-cita</td>
            <td> :
            <select name="cita">
                    <option value="pemain bola">pemain bola</option>
                    <option value="programer">programer</option>
                    <option value="pengusaha sukses">pengusaha sukses</option>
                </select>
            
        </tr>
        <tr>
            <td>kata-kata bijak</td>
            <td>:
            <textarea name="kata"></textarea>
        </tr>
        <tr>
            <td></td>
    
            <td><input type="submit" name="simpan" value="KIRIM"></td>
        </tr>
  
    </table>
    </form>
    
</body>
</html>
<?php
if(isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
   $tempat_lahit = $_POST['tempat'];
   $tanggal_lahir = $_POST['tanggal'];
  $jk = $_POST['jenis'];
  $alamat = $_POST['alamat'];
   $agama = $_POST['agama'];
      $pendidikan = $_POST['pendidikan'];
      $status = $_POST['status'];
      $hobi = $_POST['hobi'];
      $cita = $_POST['cita'];
      $kata = $_POST['kata'];

    echo "nama = $nama<br>";
    echo "Tempat Lahir = $tempat_lahit <br>";
    echo "Tanggal Lahir = $tanggal_lahir<br>";
    echo "Jenis Kelamin = $jk <br>";
    echo "Alamat = $alamat <br>";
    echo "Agama = $agama <br>";
    echo "Pendidikan Terakhir = $pendidikan<br>";
    echo "Status = $status <br>";
    echo "Hobi = $hobi<br>";
    echo "Cita-Cita = $cita<br>";
    echo "Kata-kata bijak = $kata";



}