<?php



//class nama {


  //  private $nama = "cecep";

    //method function

    //private function biodata(){
      //  echo "Nama saya" ." " .$this->nama;
    //}
    //public function nama(){
      //  echo $this->biodata();
    //}
 
//}


  //   $profil = new nama();
    // echo $profil->nama();
          //membuat class
    class manusia {

        //membuat property menggunakan protected
             protected  $nama = "Cecep Superi";


        public function nama (){
            return "Nama saya" . " ". $this->nama;
        }
        //public function tampilkan_nama(){
          //  echo $this->nama;
        //}
    }

      
        
        $panggil = new manusia();


        echo $panggil->nama();




    
   