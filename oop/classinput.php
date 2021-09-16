<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <form action="" method="post">
            <tr>
                <td>Nim</td>
                <td>:</td>
                <td><input type="text" name="nim"></td>
                
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>

            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas"></td>
            </tr>
            <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="simpan" value="simpan"></td>
            </tr>
        </form>
    </table>
    
</body>
</html>  
        <?php
        if (isset($_POST['simpan'])) {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $kelas = $_POST['kelas'];


            class bio {
                public $x;
                public $y;
                public $c;
              

                public function hasil($nim , $nama , $kelas ){
                    $this->x = $nim;
                    $this->y = $nama;
                    $this->c = $kelas;
                }
            }

            $cetak = new bio();
            $cetak->hasil($nim , $nama , $kelas);

           echo $cetak->x . "<br>";
            echo $cetak->y. "<br>";
            echo $cetak->c;
        }



?>