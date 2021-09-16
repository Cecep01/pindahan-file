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
            <th>Matematika</th>
            <th>Bahasa Inggris</th>
            <th>Bahasa Indonesia</th>
            <th>Kejuruan</th>
            <th>Rata-Rata</th>
            <th>Grade</th>
            <th>Status</th>
            
        </tr>
 <?php
        function luas ($nama , $mtk , $indo , $rpl , $ko) {
            echo "<tr>";


            echo "</tr>";

            echo "<th>$nama</th>";
            echo "<th>$mtk</th>";
            echo "<th>$indo</th>";
            echo "<th>$rpl</th>";
            echo "<th>$ko</th>";
            $rata = ($mtk + $indo + $rpl +$ko) /4;
            echo "<th>$rata</th>";
            $status= $rata >= 75 ? "lulus" : "tidak lulus";
             echo "<th>$status</th>";

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
            echo "<th>$grade</th>";
            



        }

        luas ("cecep" , 80 , 50 , 70 ,40);




?>