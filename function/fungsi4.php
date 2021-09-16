<?php

     // membuat fungsi hela didie

     function hitung ($thn_lahir , $thn_sekarang) {

        $umur = $thn_lahir - $thn_sekarang;

        return $umur;
     }

     function perkenalan ($nama , $salam = "assalamualaikum")
              {


                echo $salam . " ," ;
                echo "Perkenalkan nama saya " . $nama . "<br>";

                // memanggil fungsi hitung atau memanggil fungsi lain 
                echo "saya berusia " . hitung(2004 , 2021) . "tahun <br>";
                echo "senang berkenalan dengan anda <hr>";

              }


              //memanggil fungsi perkenalan

              echo perkenalan("cecep");


?>