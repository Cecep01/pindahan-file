<?php

    //    class biodata {

    //   public function __construct($nama , $jk , $kelas) {
    //      echo "Nama Saya :" . $nama . "<br>";
    //      echo "Jenis Kelamin :" . $jk . "<br>";
    //      echo "Kelas :" . $kelas . "<br>";
    //      echo "<hr>";
    //   }
      

    // }
    // $nama = new biodata("cecep" , "laki-laki" , "X11 RPL 1");
    // $nama = new biodata("Palah Usep" , "laki-laki" , "X11 RPL1");
    // $nama = new biodata("Zilong" , "Perempuan" , "X11 RPL 1");
      
            class bangundatat {
              
                public function __construct($panjang , $lebar , $jari , $phi , $a , $b , $t)
                {
                    echo "Alasnya : $panjang<br>";
                    echo "Tingginya : $lebar<br>";
                    $luas = $panjang * $lebar;
                    echo "Luas Persegi : $luas<br>";
                    echo "<hr>";

                    echo "Jarinya : $jari <br>";
                    
                    echo "Phi nya : $phi <br>";

                    $kel = $phi * $jari * $jari;
                    echo "Luas Lingkaran : $kel<br>";
                    echo "<hr>";
                    echo "a : $a <br>";
                    echo "b : $b<br>";
                    echo "t : $t <br>";
                    $hasi = 1/2 * $a * $b * $t;
                    echo "luas trapesium : $hasi<br>";
                    echo "<hr>";
            
                    

                    
                }
            }
            $panggil = new bangundatat(5 , 5 , 5 , 3.14 , 10 ,5 ,5);

?>