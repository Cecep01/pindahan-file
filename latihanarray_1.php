<?php

 if (isset($_POST['simpan'])) {
     $nis = $_POST['nis'];
     $nama = $_POST['nama'];
     $kelas = $_POST['kelas'];
     $bhs = $_POST['bahasa'];
     $bhs1 = $_POST['inggris'];
     $bhs2 = $_POST['mtk'];
     $bhs3 = $_POST['produktif'];
    
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
            <th>Nis</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Bahasa Indonesia</th>
            <th>Bahasa Inggris</th>
            <th>matematika</th>
            <th>produktif</th>
            <th>Total Nilai</th>
            <th>Rata-Rata</th>
            <th>Grade</th>
            <th>Status</th>
            
        </tr>


        <?php
        for ($i = 0; $i <count($nama) ; $i++) {
            $totalNilai = $bhs[$i]+$bhs1[$i]+$bhs2[$i]+$bhs3[$i];
            $rata = $totalNilai / 4;
            $status = $rata >= 75 ? "lulus" : "tidak lulus";


                if ($rata >= 90 ) {
                 $grade = " A";
             }
            else if ($rata >=  80) {
                 $grade = " B";
             }
             else if ($rata >= 75 ) {
                 $grade = " C";
             }
              else if ($rata >= 50 ) {
                 $grade = " D";
             }
             else {
                 $grade = "E";
             }
             
             


     
            ?>


            <tr>
                <td><?php echo $nis[$i]; ?></td>
                <td> <?php echo $nama[$i]; ?></td>
                <td> <?php echo $kelas[$i]; ?></td>
                <td> <?php echo $bhs[$i]; ?></td>
                <td> <?php echo $bhs1[$i]; ?></td>
                <td> <?php echo $bhs2[$i]; ?></td>
                <td> <?php echo $bhs3[$i]; ?></td>
                <td> <?php echo $totalNilai; ?> </td>
                <td> <?php echo $rata; ?> </td>
                <td> <?php echo $grade; ?> </td>
                

                <td> <?php echo $status; ?> </td>
                
               

            </tr>
          
            
  

    

            <?php
        }
        ?>


        </table>
    </center>
    
</body>
</html>