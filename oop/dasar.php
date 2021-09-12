<?php



     class Kucing {

         //proper
         public $warna = "warna",
                $jenis = "jenis",
                $jumlah_anak = 0;




                public function __construct($warna , $jenis , $jumlah_anak)
                {
                    $this->warna = $warna;
                    $this->jenis = $jenis;
                    $this->jumlah_anak = $jumlah_anak;
                    
                
         
                }

                public function Label (){
                    return "$this->warna , $this->jenis , $this->jumlah_anak";
                }
                        
     }
     $produk = new Kucing("merah" , "anggora" , 20);
      echo "Kucing :" . "  " .$produk->Label();
      echo "<br>";
    








?>