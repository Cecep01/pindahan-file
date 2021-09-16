<?php

class bangundatar {
    public $luas;
    public $kel;
   

}
    class persegi extends bangundatar {

        public function luas($sisi) {
            echo "<h3>Luas Persegi</h3></h3>";
            echo "Sisinya : " . $sisi . "<br>";
            $this->luas = $sisi * $sisi;
            $this->kel = $sisi * $sisi * $sisi * $sisi;
            echo "Luasnya :" . $this->luas . "<br>";
            echo "Keliling :" . $this->kel . "<br>";
            echo "<br>";
            echo "<hr>";
        }
    }
    class persegi_panjang extends bangundatar{
        public function panjang($panjang , $lebar){
            echo "<h3>Luas Persegi Panjang</h3></h3>";
            echo "Panjangnya :" . $panjang . "<br>";
            echo "Lebarnya :" . $lebar . "<br>";
            $this->luas = $panjang * $lebar;
            $this->kel = 2 *($panjang + $lebar);
            echo "Luasnya : " . $this->luas . "<br>" ;
            echo "Kelilingnya : " . $this->kel ;
            echo "<br>";
            echo "<hr>";
        }
    }


    class segitiga extends bangundatar{
        public function gitiga($alas , $tinggi , $s) {
            echo "<h3>Luas Segitiga</h3></h3>";
            echo "Alasnya :" .$alas . "<br>";
            echo "Tingginya :" .$tinggi . "<br>";
            $this->kel = $s + $s + $s;
            $this->luas = 1/2 * $alas * $tinggi;
            echo "Luasnya :" . $this->luas . "<br>";
            echo "Kelilingnya :" . $this->kel;
            echo "<br>";
            echo "<hr>";
        }
    }


    class lingkaran extends bangundatar{
        public function gitiga1( $jari , $phi = 3.14 ) {
            echo "<h3>Luas Lingkaran</h3></h3>";
            echo "phinya :" .$phi . "<br>";
            echo "Jarinya :" .$jari . "<br>";
            $this->luas = $phi* $jari * $jari;
            $this->kel = 2* $phi * $jari;
            echo "Luasnya :" . $this->luas . "<br>";
            echo "Kelilingnya :" . $this->kel;
            echo "<br>";
            echo "<hr>";
        }
    }
          
      $cetak = new persegi();
      $cetak->luas(5);


      $cetak = new persegi_panjang();
      $cetak->panjang(5,5);


      $cetak = new segitiga();
      $cetak->gitiga(9,8 , 5);
       
      $cetak = new lingkaran();
      $cetak ->gitiga1(10,);

?>