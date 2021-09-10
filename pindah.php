<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $nama1 = $_POST['nama1'];
    $jk = $_POST['jk'];
      $tanggal = $_POST['tanggal'];
      $jabatan = $_POST['jabatan'];
      $pendidikan = $_POST['pendidikan'];
         $lembur = $_POST['lembur'];
         $pot = $_POST['potong'];

   $vakasi_lembur = $lembur * 20000;


   if ($pendidikan == "sd") {
       $tunjangan = 250000;
   } else if($pendidikan == "smp") {
       $tunjangan = 500000;
   } else if($pendidikan == "sma") {
       $tunjangan = 1000000;
   } else if ($pendidikan == "s1") {
       $tunjangan = 1500000;
   } else {
       echo "kunn ai sia";
   }


      if ($jabatan == "direktur") {
        $rektur= 10000000;
} else if ($jabatan == "manager") {
        $rektur = 7500000;

    } else if($jabatan == "karyawan") {
        $rektur = 5000000;                 
    } else if ($jabatan == "ob") {
        $rektur = 2500000;
    } else {
        echo "milih hela";
    }
           // hasill total dari rektur tunjangan lembur dan  potongan  
    

    $total = $rektur + $tunjangan + $vakasi_lembur - $pot;

                         
                        


                 //menampilkan
                 echo "<table>";
                 echo "<tr>";
                  echo "<td>Nama Bendahara <td>: <td>$nama</td> <br>";
                  echo "</tr>";
                 
                  echo "<tr>";
                  echo "<td>Nama Karyawan</td> <td>: <td>$nama1</td>  <br>";
                  echo "</tr>";
     
                  echo "<tr>";
                  echo "<td>Jenis Kelamin</td> <td>:</td> <td>$jk</td> <br>";
                  echo "</tr>";
     
                  echo "<tr>";
                  echo "<td>tanggal</td> <td>:</td> <td>$tanggal</td><br>";
                  echo "</tr>";
     
                  echo "<tr>";
                  echo "<td>Tunjangan Pendidikan</td> <td>:</td>  <td>$tunjangan</td><br>";
                  echo "</tr>";
     
                  echo "<tr>";
                  echo "<td>Jabatan</td> <td>:</td> <td>$jabatan</td> <br>";
                  echo "</tr>";
     
                  echo "<tr>";
                  echo "<td>Gaji</td> <td>:</td> <td>$rektur</td><br>";
                  echo "</tr>";
     
                  echo "<tr>";
                  echo "<td>vakasi lembur</td> <td>:</td> <td>$vakasi_lembur</td><br>";
                  echo "</tr>";
     
                  echo "<tr>";
                  echo "<td>potongan</td> <td>:</td> <td>$pot</td> <br>";
                  echo "</tr>";
     
                  echo "<tr>";
                  echo "<td>Total Gaji</td> <td>:</td> <td>$total</td>";
                  echo "</tr>";
                  
                  echo "</table>";
}
?>