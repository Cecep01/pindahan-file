<?php

$url = "https://api.kawalcorona.com/indonesia/provinsi/";
            // persiapkan curl / init curl
$ch = curl_init();
// set url
curl_setopt($ch, CURLOPT_URL, $url);
// return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// $output contains the output string
$covi19 = curl_exec($ch);
// tutup curl
curl_close($ch);
// menampilkan hasil curl
//   echo $dataCovid;
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<center>

<h2><i>Data Anu Maot</i></h2>
<table border=1>
<tr>

    <th>Kode Provinsi</th>
    <th>Provinsi</th>
    <th>Kasus Positif</th>
    <th>Kasus Sembuh</th>
    <th>Kasus Meninggal</th>
   
   
</tr>
<?php

$data1 = json_decode($covi19);
foreach ($data1 as $covid1) {
?>
<tr>
  
    <td><?php echo $covid1->attributes->Kode_Provi; ?></td>
    <td><?php echo $covid1->attributes->Provinsi; ?></td>

    <td><?php echo $covid1->attributes->Kasus_Posi; ?></td>
    <td><?php echo $covid1->attributes->Kasus_Semb; ?></td>   
    <td><?php echo $covid1->attributes->Kasus_Meni; ?></td>
 
   
</tr>
<?php
}

?>
</center>
</body>
</html