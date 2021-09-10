
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2><center>MENGHITUNG GAJI</center> </h2>

<form method="POST" action="" >
    <table>
        <tr>
            <td>Nama</td>
            <td> :
                <input type="text"    name="nama">
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td> :
                <input type="radio" name="jk" value="perempuan" >perempuan
                <input type="radio" name="jk" value="laki-laki" >laki-laki
        </tr>
        <tr>
            <td>Pilih Agama</td>
            <td>:
                <select name="agama">
                    <option value="pilih">pilih </option>
                    <option value="islam">islam</option>
                    <option value="katolik">katolik</option>

                </select>
        </tr>
        <tr>
            <td>Pilih Golongan</td>
            <td> :
                <select name="gol">
                 <option value=""> pilih </option>
                 <option value="1" >1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
                 <option value="4">4</option>
                </select>
        </tr>
        <tr> 
            <td>Jam Kerja</td>
            <td>:
                <input type="number" name="jam" default value="173" min value="173">
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

//mengambil data dari html

if (isset($_POST['simpan']))   {
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $gol = $_POST['gol'];
    $kerja = $_POST['jam'];
      $jam_lembur = 0;
      $gaji_lembur = 0;
      $total_pajak = 0;

      //menghitung jam lembur

      $jam_lembur = $kerja - 173;

      //menghitung gaji lembur

      $gaji_lembur = $jam_lembur * 20000;



    if ($gol == "1") {
        $gaji_pokok = 1500000;
        $tunjangan = 150000;

    } else if ($gol == "2") {
        $gaji_pokok = 2000000;
        $tunjangan = 200000;
    } else if($gol == "3") {
        $gaji_pokok = 2500000;
        $tunjangan = 250000;
    } else if ($gol == "4") {
        $gaji_pokok = 3000000;
        $tunjangan = 300000;
    } else {
        echo "golongan gak ada";
    }

    //menghitung pajak gaji

    $pajak_gaji = $gaji_pokok * 0.05;

    //menghitung pajak lembur

    $pajak_lembur = $gaji_lembur * 0.05;


    //menghitung total pajak

    $total_pajak = $pajak_lembur + $pajak_gaji;

    // menghitung total gaji

    $total_gaji = $gaji_pokok + $gaji_lembur - $total_pajak;

    //menhitung tunjangan pengabdian
    $tunjangan_pengabdian = $total_gaji + $tunjangan;


    //menampilkan

    echo "Nama : $nama <br>";
    echo "Jenis Kelamin : $jk<br>";
    echo "Pilih Agama : $agama<br>";
    echo "Gaji Pokok : rp.$gaji_pokok <br>";
    echo "Gaji Lembur : rp. $gaji_lembur<br>";
    echo "Pajak Gaji pokok : rp. $pajak_gaji <br>";
    echo "Pajak Gaji Lembur : rp. $pajak_lembur<br>";
    echo "Total Pajak :rp. $total_pajak<br>";
    echo "Tunjangan Pengabdian : rp. $tunjangan_pengabdian<br>";
    echo "Gaji Yang Diterima : rp. $total_gaji";

}