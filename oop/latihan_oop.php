<?php

use latihan as GlobalLatihan;

class latihan{
    public $hasil;
    public $pengeluaran;


        public function gaji($jabatan , $pendidikan){
            echo "<h3>Pendapatan Gaji</h3></h3>";
            echo "Jabatan : $jabatan<br>";
            if ($jabatan == "direktur") {
                $rektur = 10000000;
            } else if ($jabatan == "manager") {
                $rektur = 5000000;
            } else if ($jabatan == "karyawan") {
                $rektur = 3000000;
            } else {
                echo $rektur =0 ;
            }

            echo "gaji : $rektur<br>";
            echo "Pendidikan : $pendidikan<br>";
            if ($pendidikan == "s1") {
                $tunjangan = 2000000;
            } else if ($pendidikan == "sma") {
                $tunjangan = 1000000;
            } else if ($pendidikan == "smp") {
                $tunjangan = 500000;
            } else {
                echo $tunjangan = 0;
            }
            echo "Tunjangan : $tunjangan<br>";
            $this->hasil = $rektur + $tunjangan;
            echo "<b>Total gaji :Rp.$this->hasil</b><br>";

            echo "<hr>";

        


        }
      

        public function pengeluaran($a , $b , $c) {

            echo "<h3>Pengeluaran</h3></h3>";
            echo "Bayar Listrik : $a<br>";
            echo "Bayar Kontrakan : $b <br>";
            echo "Cicilan Kendaraan : $c<br>";
            $this->pengeluaran = $a + $b + $c;
            echo "<b>Total Pengeluaran : Rp. $this->pengeluaran</b><br>";
            echo "<hr>";
        }

        public function sisa() 
        {
        
             $sisa = $this->hasil - $this->pengeluaran;
             echo "<b>Sisanya :Rp. $sisa</b>";


        }
    }

         $data = new latihan();
         $data->gaji("manager" ,"smp");
         $data->pengeluaran(200000, 1000000 , 600000);
         $data->sisa();




?>