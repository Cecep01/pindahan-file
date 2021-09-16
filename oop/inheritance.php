<?php
               //membuat class
       class berinama {


        public $nama = "ujang galak";



       


        public function nama() {
            echo "Nama saya cecep" . "<br>";
        }
    
        

       }


        //membuat class turunan

       class teman extends berinama {

               public function nama_teman(){
                    $this->nama();
                    echo "teman saya" . $this->nama;

                }
       }
              
       $hasil = new teman();
     
       $hasil->nama_teman();



?>