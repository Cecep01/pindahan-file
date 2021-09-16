<!DOCTYPE html>
<html>
    <head> 
        <title>Syarat Masuk Ke MIKO MALL</title>
    </head>
    <body>
        <center>
<h2>Syarat Masuk Ke MIKO MALL</h2>
<form method="POST" action="">
    <table>
    <tr>
         <td>Nama Anda</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
         <tr>
         <td>Umur</td>
            <td>:</td>
            <td><input type="number" name="umur"></td>
        </tr>
        <tr>
            <td>Status Vaksin</td>
            <td>:</td>
            <td><select name = "status_vaksin">
<option>-- Status Vaksin --</option>
<option>Sudah Vaksin</option>
<option>Belum Vaksin</option>
</select>
</td>
</tr>
        <tr>
    <td></td>
    <td></td>
<td>
<input type="submit" name="simpan" value="KIRIM"></td>
</tr>
        </table>
</form>

    <?php
    
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $status_vaksin = $_POST['status_vaksin'];

    echo "<br> Nama Anda : $nama <br>";
    echo "Umur : $umur <br>";
    echo "Status Vaksin : $status_vaksin <br>";

    if(($umur >=12 && $umur <= 50) && $status_vaksin == "Sudah Vaksin"){
        echo "diizinkan";
    }else if(($umur >= 12 && $umur <= 50) && $status_vaksin == "Belum Vaksin"){
        echo "tidak diizinkan <br>";
        ?> <a href="https://pedulilindungi.id/">Daftar Vaksin Disini</a>
        <?php 
    }else if($status_vaksin == "Belum Vaksin"){
        echo "tidak diizinkan <br>";
        ?> <a href="https://pedulilindungi.id/">Daftar Vaksin Disini</a>";
        <?php
    } 
}
?>
</center>
</body>
    