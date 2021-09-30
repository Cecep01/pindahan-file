<?php
    class Jenis extends Database
    {

        public function index()
        {
            $datadosen = mysqli_query($this->koneksi, "select * from jenis");

            return $datadosen;
        }
        public function create($nama_jenis)
        {
            mysqli_query($this->koneksi,
                        "insert into jenis values (null,'$nama_jenis')"
                    );

        }
        public function show($id)
        {
            $datadosen = mysqli_query($this->koneksi, 
                        "select * from jenis where id='$id'"
                    );

            return $datadosen;
        }
        public function edit($id)
        {
            $datadosen = mysqli_query($this->koneksi, 
                        "select * from jenis  where id='$id'"
                    );

            return $datadosen;
        }
        public function update($id, $nama_jenis)
        {
            mysqli_query(
                $this->koneksi,
                "update jenis set nama_jenis='$nama_jenis' where id='$id'"
            );
        }
        public function delete($id)
        {
            mysqli_query($this->koneksi, "delete from jenis where id='$id'"
                    );

        }
        
    }
?>