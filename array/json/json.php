<?php

//$mahasiswa = [
  //'nama' => 'Nurul Huda',
  //'domisili' => 'Surabaya'
//];

//echo json_encode($mahasiswa);

//$nilaiUjian = [70, 80, 50, 90];

//echo json_encode($nilaiUjian);



$listMahasiswaJSON = '[
    { "dosen": "Nurul Huda" ,
       "Nim" : 1234,
      "Nama" : "wildan",
       "umur" : 12,
      "email" : "nurul@gmail.com"
    },
    { "dosen": "Renza Ilhami Risqi",
      "Nim" : 1234,
      "Nama" : "wildan".
       "umur" : 12,
      "email" : "nurul@gmail.com"
    
    },
    { "dosen": "Taufan Aji",
      "Nim" : 1234,
      "Nama" : "wildan",
       "umur" : 12,
      "email" : "nurul@gmail.com"
    
    },
    { "dosen": "Rahmad Dwi Oktanto" ,
      "Nim" : 1234,
      "Nama" : "wildan",
       "umur" : 12,
      "email" : "nurul@gmail.com"
    
    }
  ]';
  
  $listMahasiswa = json_decode($listMahasiswaJSON);
  
  foreach ($listMahasiswa as $d) {
    echo "Dosen : ".$d['dosen'] . "<br>";
                    
    echo "Nim : ".$d['Nim'] ."<br>";
    
    echo "Nama :" .$d['Nama'] ."<br>";
    echo "Umur :" .$d['umur'] ."<br>";
    echo "Email :" .$d['email'] ."<br>";
  }


  
?>

