<?php

              
        //membuaut sebuah class

      // class Laptop{
           //property

        //   var $pemilik;
          // var $merk;
            //var $ukuran_layar;

                 //ini adalah struktur fucntion
            //function hidupkan_laptop(){
                //isi dari method hidupkan laptop
              //  return "hirupkennya saaacn di buka";

            //}

            //function matikan_laptop(){
              //  return "matiken saengges di gunaken";              

            //}


       //}

       //$laptop_cecep = new Laptop();

       //echo $laptop_cecep->hidupkan_laptop();
       //echo "<br>";
       //echo $laptop_cecep->matikan_laptop();


      
            class buah {
                public $anggur;
                public $melon;
                public $jeruk;



           public function rasa ($ket){
                    return $ket;
                }
                public function bentuk(){
                    return "bentuknya bulat";
                }

                 public function warna (){
                    return "warnanya ungu";
                }
            }
             
            $buahan = new buah();
           

            echo $buahan->rasa("enak banget");
            echo "<br>";
            echo $buahan->bentuk();
            echo "<br>";
            echo $buahan->warna();
            echo "<br>";
            $buahan->anggur = "anggur";
            echo $buahan->anggur;
            echo "<br>";
            $buahan->melon = "melon";
            echo $buahan->melon;
            echo "<br>";
            $buahan->jeruk = "jeruk";
            echo $buahan->jeruk;
            echo "<br>";
            





?>