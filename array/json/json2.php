<?php



                    //file join yang akan di baca
                $file = "anggota.json";
                        
                            //mendapatkan file json
                
                $anggota = file_get_contents($file);


                            //mendecode anggota json

                $data = json_decode($anggota , true);

                        

                    //membaca atau menampilkan data array menggunakan foreach

                foreach ($data as $key => $d) {
                    echo "Dosen : ".$d['dosen'] . "<br>";
                    
                    echo "Nim : ".$d['Nim'] ."<br>";
                    
                    echo "Nama :" .$d['Nama'] ."<br>";
                    echo "Umur :" .$d['umur'] ."<br>";
                    echo "Email :" .$d['email'] ."<br>";
                }
                 



            








?>