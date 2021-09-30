<?php
    class pelanggan extends Database
    {

        public function index()
        {
            $datapelanggan = mysqli_query($this->koneksi, "select * from pelanggan");

            return $datapelanggan;
        }
        public function create($nama , $alamat , $jk , $no_hp)
        {
            mysqli_query($this->koneksi,
                        "insert into pelanggan values (null,'$nama' , '$alamat' , '$jk' , '$no_hp')"
                    );

        }
        public function show($id)
        {
            $datapelanggan = mysqli_query($this->koneksi, 
                        "select * from pelanggan where id='$id'"
                    );

            return $datapelanggan;
        }
        public function edit($id)
        {
            $datapelanggan = mysqli_query($this->koneksi, 
                        "select * from pelanggan  where id='$id'"
                    );

            return $datapelanggan;
        }
        public function update($id, $nama , $alamat , $jk , $no_hp)
        {
            mysqli_query(
                $this->koneksi,
                "update pelanggan set nama='$nama' , alamat='$alamat' , jk='$jk' ,no_hp='$no_hp' where id='$id'"
            );
        }
        public function delete($id)
        {
            mysqli_query($this->koneksi, "delete from pelanggan where id='$id'"
                    );

        }
        
    }
?>