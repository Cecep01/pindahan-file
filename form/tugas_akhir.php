<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h2>Program Penggajihan</h2>
    <form method ="POST" action="pindah.php">

    <table>
        
        <tr>
            <td><center>Nama Bendahara</td>
            <td> : </center> 
                <input type="text"    name="nama"> 
        </tr>
        <tr>
            <td>Nama Pekerja</td>
            <td> :
                <input type="text"    name="nama1">
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td> :
                <input type="radio" name="jk" value="perempuan" >perempuan
                <input type="radio" name="jk" value="laki-laki" >laki-laki
        </tr>
        <tr>
        <tr>
            <td>Tanggal Gaji</td>
            <td> :
                <input type="date"    name="tanggal">
        </tr>
        <tr>
            <td>Jabatan</td>
            <td> :
                <select name="jabatan">
                    <option>pilih jabatan
                        <option value="direktur">direktur</option>
                        <option value="manager">manager</option>
                        <option value="karyawan">karyawan</option>
                        <option value="ob">ob</option>
                </select>
        </tr>
        <tr>
            <td>Pendidkan Terakhir</td>
            <td> :
                <select name="pendidikan">
                    <option>pendidikan terakhir
                        <option value="sd">sd</option>
                        <option value="smp">smp</option>
                        <option value="sma">sma</option>
                        <option value="s1">s1</option>
                </select>
        </tr>
        <tr>
            <td>Lembur </td>
            <td> :
                <input type="text" name= "lembur" > Hari / rp.20.000
        </tr>
        <tr>
            <td>Potongan </td>
            <td> :
                <input type="text" name= "potong" >
</tr>
<tr>
            <td></td>
    
            <td><input type="submit" name="simpan" value="KIRIM"></td>
        </tr>


    </form>
</center>
    
</body>
</html>

