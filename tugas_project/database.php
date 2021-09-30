<?php
    class Database{
        public $host = "localhost", $user = "root", $pass = "", $db="project_rental";
        public $koneksi;

        public function __construct()
        {
            $this->koneksi = mysqli_connect(
                $this->host,
                $this->user,
                $this->pass,
                $this->db
            );
            if($this->koneksi){
                // echo"Berhasil";
            }
            else
            {
                echo"Koneksi Database Gagal";
            }
        }
    }

    $db = new Database();

    include 'jenis.php';
    include 'mobil.php';
    include 'pelanggan.php';
    //include 'mahasiswa.php';
?>