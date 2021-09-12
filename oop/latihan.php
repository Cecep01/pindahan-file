<?php

class latihan {


    public function persegi ($sisi) {

        echo "Menghitung Luas Persegi <br>";
        echo "Sisinya : $sisi" . "<br>";

        $luas = $sisi * $sisi;
        echo "Luasnya : $luas";
        echo "<br>";
    echo "<hr>";
    }
    

    public function segitiga ($alas , $tinggi) {
        echo "Menghitung Luas Segitiga <br>";
        echo "Alas : $alas" . "<br>";
        echo "Tinggi : $tinggi" . "<br>";

        $luas = 1/2 * $alas * $tinggi;
        echo "Luasnya : $luas";
        echo "<br>";
    echo "<hr>";
    }
    public function lingkaran ($phi , $jari) {
        echo "Menghitung Luas Lingkaran <br>";
        echo "phi : $phi" . "<br>";
        echo "jari-jari : $jari" . "<br>";

        $luas = $phi * $jari * $jari;
        echo "Luasnya : $luas";
        echo "<br>";
        echo "<hr>";
    }


}

$data = new latihan();
$data->persegi(5);
$data->segitiga(10 ,5);
$data->lingkaran(3.14 ,10);




?>