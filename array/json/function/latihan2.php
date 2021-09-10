<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form biodata</title>
</head>
<body>
<fieldset>
    <legend>BIODATA</legend>
    
    <form method="POST" action="">
    <table  >
        <tr>
            <td>Nama </td>
            <td> :
                <input type="text" name="nama"><br>
        </tr>
        <tr>
        <tr>
            <td>tanggal lahir </td>
            <td> :
        <input type="date" name="tanggal"><br>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:
    <input type="radio" name="jenis" value="aww" >PEREMPUAN
    <input type="radio" name="jenis" value="lalaki" >LAKI-LAKI
        </tr>
        <tr>
        <td>Agama </td>
            <td> :
                <select name="agama">
                    <option value="islam">ISLAM</option>
                    <option value="hindu">HINDU</option>
                    <option value="katolik">KATOLIK</option>
                </select>
        </tr>

        <tr>
            <td>Alamat</td>
            <td> :
        <textarea name="alamat"> </textarea><br>
        </tr>

        <tr>
            <td>Hobi : </td>
            <td>:
            <input type="checkbox" name="hobi[]" value="MANCING">MANCING
            <input type="checkbox" name="hobi[]" value="MAEN ML" >MAEN ML
            <input type="checkbox" name="hobi[]" value="MAEN RAKET">MAEN RAKET
            <input type="checkbox" name="hobi[]" value="NGOPI">NGOPI
            <input type="checkbox" name="hobi[]" value="MAKAN NASI">MAKAN NASI
            <input type="checkbox" name="hobi[]" value="MENDEGARKAN MUSIK">MENDENGARKAN MUSIK
        </tr>
        <tr>
            <td></td>
    
            <td><input type="submit" name="simpan" value="KIRIM"></td>
        </tr>
  
    </table>
    
    </fieldset>

    <?php

       if (isset($_POST['simpan'])){
           $nama = $_POST['nama'];
           $tgl = $_POST['tanggal'];
           $jns = $_POST['jenis'];
           $agm = $_POST['agama'];
           $alm = $_POST['alamat'];
           $hobi = $_POST['hobi'];

           echo "Nama : $nama <br>";
           echo "Tanggal : $tgl<br>";
           echo "Jenis Kelamin : $jns<br>";
           echo "Agama : $agm<br>";
           echo "Alamat : $alm<br>";
        
           echo "HOBI :" . " ";
           foreach ($hobi as $data) {
               echo $data . " , ";
              
           }

       }

    ?>
    </form>
    
</body>
</html>