<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <center><h2>Tampilkan Data Mahasiswa</h2></center>
 <ul>
     @foreach ($kelas as $kelas2)
     Nis     : {{$kelas2['nis']}} <br>
     Nama   : {{$kelas2['nama']}} <br>
     Jenis Kelamin : {{$kelas2['jenis_kelamin']}} <br>
     Jurusan : {{$kelas2['jurusan']}} <br>
     Kelas : {{$kelas2['kelas']}} <br>
     wali kelas : {{$kelas2['wali_kelas']}} <br>
     <hr>


     @endforeach
 </ul>
</body>
</html>
