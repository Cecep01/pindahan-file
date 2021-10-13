<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('welcome');
});


Route::get('/heloo', function () {
    return "<h1>Nama Saya Cecep</h1>";
});

Route::get('/biodata', function () {
 echo '<h1>Biodata</h1>';
 echo 'Nama : Cecep Superi</br>';
 echo 'Tempat tanggal lahir : Bandung , 01 juni 2004</br>';
 echo 'Jenis Kelamin : Laki-Laki</br>';
 echo 'Alamat : Babakan Nugraha';

});

//Route::get('/input/{nama}/{tempat}/{jk}/{alamat}', function($nama,$tempat,$jk,$alamat) {
  //  echo 'Nama Saya : ' . $nama. "</br>";
    //echo "Tempat Lahir : " . $tempat . "</br>";
    //echo 'Jenis Kelamin :' . $jk . "</br>";
    //echo 'Alamat :' . $alamat;

//});


Route::get('/optional/{nama}/{usia?}' , function($nama , $usia=17) {
    echo "Nama Saya :" . $nama . "<br>";
    echo "Usia Saya :" . $usia;
});

Route::get('/latihan/{nama}/{kelas}/{bhs_indonesia?}/{matematika?}/{inggris?}/{produktif?}' ,
function($nama , $kelas , $bhs_indonesia=0 , $matematika=0 , $inggris=0 , $produktif=0 ){
    echo "Nama :" . $nama . "</br>";
    echo "Kelas :" . $kelas . "</br>";
    echo "Nilai indonesia :" . $bhs_indonesia . "</br>";
    echo "Nilai Matematika :" . $matematika . "</br>";
    echo "Nilai Inggris :" . $inggris . "</br>";
    echo "Nilai Produktif :" . $produktif . "</br>";

    echo "Rata :" .  ($bhs_indonesia + $matematika + $inggris + $produktif) / 4;

});

Route::get('pesan/{makanan?}/{minuman?}/{cemilan?}' , function($makanan=null , $minuman=null , $cemilan=null){
 if ($makanan != null) {
     echo "Anda Pesan <br>";
     echo "Makanan :" . $makanan . "<br>";
 } if ($makanan && $minuman != null) {
     echo "Minuman :" . $minuman ."<br>";

 }
 if ($makanan && $minuman && $cemilan != null) {
    echo "Cemilan :" .$cemilan ;

}
 else if($makanan == null && $minuman == null && $cemilan == null)
           {
               echo "anda tidak memsan";

           }




});
//cara membuat route menggunakan compact
Route::get('/pindah', function () {
    $nama = "cecep";
    $jk = "Laki-Laki";
    $alamat = "Babakan Nugraha";
    $ttl = "Bandung , 01 juni 20004";
    return view('hallo' , compact('nama' , 'jk' , 'alamat' , 'ttl'));

});
 //cara membuat route view menggunakan parameter
Route::get('posting/{nama?}/{jk?}/{alamat?}/{ttl?}' , function($nama , $jk , $alamat , $ttl){
    return view('post' ,
     [
    'a' => $nama ,
    'b' => $jk ,
    'c' => $alamat ,
    'd' => $ttl]);
});


//cara membuat route blog
Route::get('blog' , function(){
    $data = [
        ['id' => 1 ,
        'title' => 'olahraga',
        'content' => 'sepak bola'
    ],
    [
       'id' => 2,
       'title' => 'ekonomi',
       'content' => 'hutang'
    ]
    ];

    return view('blog' , compact('data'));
});



Route::get('latihan2' , function(){
    $kelas = [
        ['nis' => 123456 ,
        'nama' => 'Cecep Superi',
        'jenis_kelamin' => 'Laki-Laki',
        'jurusan' => "rpl",
        'kelas' => '12 rpl 1',
        'wali_kelas' => 'bu herna'
            ],
         ['nis' => 123457 ,
          'nama' => 'Diki Alif ',
          'jenis_kelamin' => 'Laki-Laki',
          'jurusan' => "rpl",
          'kelas' => '12 rpl 1',
          'wali_kelas' => 'bu herna'
         ],
            ['nis' => 1234561 ,
            'nama' => 'Bagas Firmansyah',
            'jenis_kelamin' => 'Laki-Laki',
            'jurusan' => "rpl",
            'kelas' => '12 rpl 1',
            'wali_kelas' => 'bu herna'
            ],

            ['nis' => 123453 ,
            'nama' => 'Adi Candra',
            'jenis_kelamin' => 'Laki-Laki',
            'jurusan' => "rpl",
            'kelas' => '12 rpl 1',
            'wali_kelas' => 'bu herna'
            ],
            ['nis' => 1234562 ,
            'nama' => 'Jojo Sutanto',
            'jenis_kelamin' => 'Laki-Laki',
            'jurusan' => "rpl",
            'kelas' => '12 rpl 1',
            'wali_kelas' => 'bu herna'
            ],
            ['nis' => 1234568 ,
            'nama' => 'Ikbal Ardiansyah',
            'jenis_kelamin' => 'Laki-Laki',
            'jurusan' => "rpl",
            'kelas' => '12 rpl 1',
            'wali_kelas' => 'bu herna'
            ],
            ['nis' => 1234567 ,
            'nama' => 'Farid ahmad',
            'jenis_kelamin' => 'Laki-Laki',
            'jurusan' => "rpl",
            'kelas' => '12 rpl 1',
            'wali_kelas' => 'bu herna'
            ],
            ['nis' => 123453 ,
            'nama' => 'Abelina',
            'jenis_kelamin' => 'Perempuan',
            'jurusan' => "rpl",
            'kelas' => '12 rpl 1',
            'wali_kelas' => 'bu herna'
            ],
            ['nis' => 1234560 ,
            'nama' => 'Fanny Terbang',
            'jenis_kelamin' => 'Perempuan',
            'jurusan' => "rpl",
            'kelas' => '12 rpl 1',
            'wali_kelas' => 'bu herna'
            ],
            ['nis' => 1234566 ,
            'nama' => 'Fajar Gundul',
            'jenis_kelamin' => 'Laki-Laki',
            'jurusan' => "rpl",
            'kelas' => '12 rpl 1',
            'wali_kelas' => 'bu herna'
            ],

                ];

    return view('data-siswa' , compact('kelas'));
});
