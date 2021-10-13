<?php
       class database {
           public $host = "localhost" , $user = "root" , $pass = "" , $db = "latihan_crud";
           public $koneksi;

           public function __construct()
           {
               $this->koneksi = mysqli_connect(
               $this->host,
               $this->user,
               $this->pass,
               $this->db

               );
               if ($this->koneksi){
                   // koneksi berhasil
                   
               } else {
                   echo "koneksi database gagal";
               }

           }
       }
       include 'dosen.php';
       

       $db = new database();

