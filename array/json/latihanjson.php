<?php



                    //file join yang akan di baca
                $file = "latihan.json";
                        
                            //mendapatkan file json
                
                $latihan = file_get_contents($file);


                            //mendecode anggota json

                $data = json_decode($latihan , true);

                        

                    //membaca atau menampilkan data array menggunakan foreach

                foreach ($data as $d) {
                    echo "Nama :" . $d['nama'] . "<br>";
                    echo "demo :". $d['domisili'] . "<br>";
                    echo "Hobi: " . "<ul>"  ;

               
            
                    echo "<li>" . implode(", ", $d['hobi'] ) . "</li>"  ;
                    

                    


                 }
                 echo "<br>";
                 



            








?>