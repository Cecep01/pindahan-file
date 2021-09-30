<?php
    class Mobil extends Database 
    {

        public function index()
        {
            $datamobil = mysqli_query($this->koneksi, 
            
            "select mobil.merek,mobil.no_plat,mobil.warna, jenis.nama_jenis 
            from mobil
            join jenis
            on mobil.id_jenis = jenis.id");

            return $datamobil;
        }
        public function create($merek , $no_plat , $warna , $id_jenis)
        {
            mysqli_query($this->koneksi,
                        "insert into mobil values (null,'$merek' , '$no_plat' , '$warna' , '$id_jenis')"
                    );

        }
        public function show($id)
        {
            $datamobil = mysqli_query($this->koneksi, 
                        "select * from mobil where id='$id'"
                    );

            return $datamobil;
        }
        public function edit($id)
        {
            $datadosen = mysqli_query($this->koneksi, 
                        "select * from mobil  where id='$id'"
                    );

            return $datadosen;
        }
        public function update($id, $merek , $no_plat , $warna , $id_jenis)
        {
            mysqli_query(
                $this->koneksi,
                "update mobil set merek='$merek' , no_plat='$no_plat' , warna='$warna' , id_jenis='$id_jenis' where id='$id'"
            );
        }
        public function delete($id)
        {
            mysqli_query($this->koneksi, "delete from mobil  where id='$id'"
                    );

        }
        
    }
?>