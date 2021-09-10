<?php

 if (isset($_POST['simpan'])) {
     $nis = $_POST['nasi'];
     $nama = $_POST['mie'];
     $kelas = $_POST['ayam'];
    
    
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
            <th>Nasi Goreng</th>
            <th>Mie Goreng</th>
            <th>Ayam Goreng</th>
            <th>Total </th>
            <th>Diskon </th>
            <th>Total Bayar</th>
            
            
            
        </tr>


        <?php
        for ($i = 0; $i <count($nama) ; $i++) {
           $total = $nis[$i] + $nama[$i] + $kelas[$i];
                   
           $diskon = $total >= 50000 ? "diskon 20%" : "tidak dapat diskon";

           $totalbayar = $total - $diskon;



     
            ?>


            <tr>
                <td><?php echo $nis[$i]; ?></td>
                <td> <?php echo $nama[$i]; ?></td>
                <td> <?php echo $kelas[$i]; ?></td>
                <td> <?php echo $total; ?></td> 
                <td> <?php echo $diskon; ?> </td>
                              <td> <?php echo $totalbayar; ?> </td>
                
               

            </tr>
          
            
  

    

            <?php
        }
        ?>


        </table>
    </center>
    
</body>
</html>