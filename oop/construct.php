<?php


        // //membuat class
        // class bio {

        //     function nama (){
        //         return "Nama Saya Cecep Superi </br>";
        //     }
        //     function kelas () {
        //         return "Dan kelas saya 12 rpl 1 </br>";
        //     }

        //     function __construct() {
        //         echo "mendahulukan hela </br>";
        //     }
            
                
            
        // }

        // $pemanggilan = new bio();
        // echo $pemanggilan->nama();
        // echo $pemanggilan->kelas();
    
// buat class laptop
class laptop {
  
   private $pemilik = "Andi";
   private $merk = "Lenovo";
   
   public function __construct(){
     echo "Ini berasal dari Constructor Laptop";
   }
  
   public function hidupkan_laptop(){
     return "Hidupkan Laptop $this->merk punya $this->pemilik";
  
   }
   public function __destruct(){
     echo "Ini berasal dari Destructor Laptop";
   }
}
  
// buat objek dari class laptop (instansiasi)
$laptop_andi= new laptop();
  
echo "<br />";
echo $laptop_andi->hidupkan_laptop();
echo "<br />";
  
// hapus objek $laptop_andi
unset($laptop_andi);
  
echo "<br />";
echo "Objek Telah Dihancurkan";
?>