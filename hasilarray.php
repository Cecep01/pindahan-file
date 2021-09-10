<?php

 if (isset($_POST['simpan'])) {
     $nama = $_POST['nama'];
     $kelas = $_POST['kelas'];
     $jk = $_POST['jk'];
 }

?>

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
        <h2>Data Siswa Kelas X11 RPL 1</h2>
        <table border="1">

        <tr>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jenis Kelamin</th>
        </tr>


        <?php
        for ($i = 0; $i <count($nama) ; $i++) {
            ?>

            <tr>
                <td><?php echo $nama[$i]; ?></td>
                <td> <?php echo $kelas[$i]; ?></td>
                <td> <?php echo $jk[$i]; ?></td>
            </tr>

            <?php
        }
        ?>


        </table>
    </center>
    
</body>
</html>