<?php

$nama = array (
    "palah" ,
    "aziz" , 
    "aliyul" ,
    " adzura" ,
    "nabila" ,
    "cecep" ,
    "cindy" ,
    "maudy" ,
    "diki" ,
    "dinda" ,
); 

$nilai = array (
    "k" => 10,
    "l" => 20,
    "m" => 30,
    "n" => 40,
    "0" => 50,
    "p" => 60,
    "a" => 70,
    "b" => 80,
    "c" => 90,
    "d" => 100
);
 

        // menampilkan inputan dari nama dan nilai


 // echo "Nilai Produktif Siswa <br>";
 //echo "<br>";

// echo $nama['0'] . " ". $nilai ['a'] . "<br>";
// echo $nama['9'] . " ". $nilai ['b'] . "<br>";
// echo $nama['5'] . " " .$nilai ['c'] . "<br>";
// echo $nama['7'] . " " .$nilai ['d'] . "<br>";
// echo $nama['4'] . " " .$nilai ['p'] . "<br>";


//menampilkan data menggunakan foreach

foreach ($nilai as $key => $kunn) {
    echo $kunn . "<br>";
}



?>