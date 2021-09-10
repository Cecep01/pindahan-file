<?php

       function Luas () {

        $alas = 20;
        $tinggi = 5;
        $luas = ($alas * $tinggi) / 2;
        return $luas;

       }

       function kel () {
           $alas = 50;
           $tinggi = 20;
           $kel = $alas * $tinggi;

           return $kel;
       }

       echo "Luas Lingkaran : " . Luas();
       echo "<br>"; 
       echo "Keliling Lingkaran :" . kel();



?>