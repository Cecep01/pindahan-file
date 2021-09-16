<?php

class latihan {


    public function nama ($nama) {
        echo "<center>";

        echo "<table>";
        echo "<tr>";
        
        echo "<td><b><i>gaji pokok</b></i></td><br>";
      
        echo "</tr>";
        echo "</center>";
        

        echo "<tr>";


        echo "<td>Nama Karyawan</td>";
        echo "<td>:</td>";
        echo "<td>$nama</td><br>";

        echo "</tr>";

      
    }
    

    public function jeniskelamin ($jk) {
      echo "<tr>";
       echo "<td>Jenis Kelamin</td>";
       echo "<td>:</td>";
       echo "<td>$jk</td><br>";
      
    }
    public function tunjangan ($tunjangan) {

        echo "<tr>";
        echo "<td>Tunjangan Terakhir</td>";
        echo "<td>:</td>";
        echo "<td>$tunjangan</td>";


       
    }

    public function jabatan ($jabatan) {

        echo "<tr>";
        echo "<td>Jabatan</td>";
        echo "<td>:</td>";
        echo "<td>$jabatan</td>";
      
  
    }

    public function kombinasi ($gaji , $lembur) {

        echo "<tr>";
        echo "<td>Gaji</td>";
        echo "<td>:</td>";
        echo "<td>$gaji</td><br>";

        
    



}

$data = new latihan();
$data->nama("cecep");
$data->jeniskelamin("laki-laki");
$data->tunjangan("SD");
$data->jabatan("Manager");



?>