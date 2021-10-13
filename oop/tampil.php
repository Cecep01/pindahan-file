<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body {
            background-color: orange;
        }
    </style>
    



<?php
                  if (isset($_POST['simpan'])) {
                      $no = $_POST['no'];
                      $nama = $_POST['nama'];
                      $unit = $_POST['unit'];
                      $date = $_POST['tanggal'];
                      $jabatan = $_POST['jabatan'];
                      $lama = $_POST['lama'];
                      $status = $_POST['status'];
                      $bpjs = $_POST['bpjs'];
                      $pinjam = $_POST['pinjam'];
                      $tabung = $_POST['tabung'];
                      $lain = $_POST['lain'];

                      class proyek {
                          public $a;
                          public $b;
                          public $c;
                          public $d;

                          

                          public function tampil($no , $nama , $unit ,$date) {
                              $this->a=$no;
                              $this->b=$nama;
                              $this->c=$unit;
                              $this->d=$date;
                              echo "<center>";
                              echo "<table>";
                              echo "<tr>";

                              echo "<td>No</td>";
                              echo "<td>:</td>";
                              echo "<td>$no</td>";
                              echo "</tr>";

                              echo "<tr>";
                              echo "<td>Nama</td>";
                              echo "<td>:</td>";
                              echo "<td>$nama</td>";

                              echo "</tr>";

                              
                              echo "<tr>";
                              echo "<td>Unit</td>";
                              echo "<td>:</td>";
                              echo "<td>$unit</td>";

                              echo "</tr>";
                              

                              
                              echo "<tr>";
                              echo "<td>Tanggal</td>";
                              echo "<td>:</td>";
                              echo "<td>$date</td>";

                              echo "</tr>";

                             
                                 echo "<tr>";
                                 echo "<td></td>";
                                 echo "<td></td>";
                              echo "<td><h3>Gaji</td></h3>";
                          }

                      }

                      class gaji extends proyek {
                        public $jumlah;
                        public $jabat;
                        public $stat;
                        public $bon;
                        

                        public function gaji2($jabatan , $status , $lama) {
                            $this->jabat = $jabatan;
                            $this->stat = $status;
                            $this->bon = $lama;

                            
                            if($jabatan == "Kepala Sekolah") {
                                $gaji3 = 5000000;
                            }else if($jabatan == "guru") {
                                $gaji3 = 3000000;
                            }else if($jabatan == "karyawan"){
                                $gaji3 = 1500000;
                            } else {
                                $gaji3 = 0;
                            }
                            
                            echo "<tr>";
                              echo "<td>Jabatan</td>";
                              echo "<td>:</td>";
                              echo "<td>$jabatan</td>";

                              echo "</tr>";

                              echo "<tr>";
                              echo "<td>Gaji</td>";
                              echo "<td>:</td>";
                              echo "<td>$gaji3</td>";

                              echo "</tr>";
                               
                              echo "<tr>";
                              echo "<td>Lama Kerja</td>";
                              echo "<td>:</td>";
                              echo "<td>$lama</td>";

                              echo "</tr>";
                               
                           
                             if($lama > 6 || $lama <= 10) {
                                $hasil = 500000;
                            }else if($lama > 0 || $lama <= 5) {
                                $hasil = 250000;
                            } else {
                                $hasil = 1000000;
                            }
                           
                            echo "<tr>";
                            echo "<td>Bonus Lama Kerja</td>";
                            echo "<td>:</td>";
                            echo "<td>$hasil</td>";

                            echo "</tr>";     

                            if($status == "pegawai tetap") {
                                $status1 = 500000;

                            }else if($status == "pegawai kontrak"){
                                $status1 = 0;
                            }
                            
                            echo "<tr>";
                            echo "<td>Status Kerja</td>";
                            echo "<td>:</td>";
                            echo "<td>$status</td>";

                            echo "</tr>";

                            echo "<tr>";
                            echo "<td>Tunjangan Status Kerja</td>";
                            echo "<td>:</td>";
                            echo "<td>$status1</td>";

                            echo "</tr>";
                             
                             

                            
                            $this->jumlah = $gaji3 + $hasil + $status1;
                            
                            echo "<tr>";
                            echo "<td>Total Gaji</td>";
                            echo "<td>:</td>";
                            echo "<td>$this->jumlah</td>";

                            echo "</tr>";

                            echo "<tr>";
                            echo "<td></td>";
                            echo "<td></td>";
                         echo "<td><h3>Potongan</td></h3>";
                             


                            



                        }
                      }


                      class potongan extends gaji {
                    
                        public $tampil;
                        public $bpjs;
                        public $pinjam;
                        public $tabung;
                        public $lain;

                        public function meta ($bpjs , $pinjam , $tabung , $lain) {
                            $this->bpjs = $bpjs;
                            $this->pinjam = $pinjam;
                            $this->tabung= $tabung;
                            $this->lain = $lain;

                            echo "<tr>";
                            echo "<td>Bpjs</td>";
                            echo "<td>:</td>";
                            echo "<td>$bpjs</td>";

                            echo "</tr>";

                            echo "<tr>";
                            echo "<td>Pinjaman</td>";
                            echo "<td>:</td>";
                            echo "<td>$pinjam</td>";

                            echo "</tr>";

                            echo "<tr>";
                            echo "<td>Tabungan</td>";
                            echo "<td>:</td>";
                            echo "<td>$tabung</td>";

                            echo "</tr>";

                            echo "<tr>";
                            echo "<td>Lainnya</td>";
                            echo "<td>:</td>";
                            echo "<td>$lain</td>";

                            echo "</tr>";
                             
                        
                            $this->tampil = $bpjs + $pinjam + $tabung + $lain;


                            echo "<tr>";
                            echo "<td>Total Potongan</td>";
                            echo "<td>:</td>";
                            echo "<td>$this->tampil</td>";

                            echo "</tr>";
                        }
                        public function sisa() {
                            $hasil = $this->jumlah - $this->tampil;

                            echo "<tr>";
                            echo "<td></td>";
                            echo "<td></td>";
                         echo "<td><h3>Jumlah Semuanya</td></h3>";
                           
                            echo "<tr>";
                            echo "<td>Jumlah</td>";
                            echo "<td>:</td>";
                            echo "<td>$hasil</td>";

                            echo "</tr>";
                             
                            echo "</center>";
                            echo "</table>";

                        }
                      }

                      $cetak = new potongan();
                      $cetak->tampil($no , $nama , $unit , $date);
                     $cetak->gaji2($jabatan , $status , $lama );
                     $cetak->meta($bpjs , $pinjam , $tabung, $lain);
                      $cetak->sisa();
                          


                     

                    
                  }
                  ?>
                  </body>
</html>