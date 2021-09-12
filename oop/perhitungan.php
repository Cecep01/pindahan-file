\<?php

class Latihan
{

    public $sisi;
    public $alas;
    public $tinggi;
    public $jari;
    public $phi = 3.14;


    public function luaspersegi()
    {
        return $this->sisi * $this->sisi;
    }

    public function luasSegitiga()
    {
        return ($this->alas * $this->tinggi) / 2;
    }

    public function luaslol()
    {
        return ($this->jari * $this->jari) / $this->phi;
    }
}


$persegi = new Latihan();
echo "Menghitung luas persegi <br>";
$persegi->sisi = 10;
echo "Sisi : {$persegi->sisi} <br>";
echo "Luas Persegi : " . $persegi->luasPersegi();
echo "<br>";

$segitiga = new Latihan();
$segitiga->alas = 10;
$segitiga->tinggi = 5;
echo "Alasnya : {$segitiga->alas} <br>";
echo "Alasnya : {$segitiga->tinggi} <br>";
echo "Luas Segitigas : " . $segitiga->luasSegitiga();

echo "<br>";
$segitiga2 = new Latihan();
$segitiga2->jari = 10;
echo "Alasnya : {$segitiga2->phi} <br>";
echo "Jari-Jari : {$segitiga2->jari} <br>";
echo "Luas Segitigas : " . $segitiga2->luaslol();