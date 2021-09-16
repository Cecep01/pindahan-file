<?php

use manusia as GlobalManusia;

class manusia {

    function __destruct()
    {
        echo "ini yang paling akhir </br>";
    }
    function __construct()
    {
        echo "ini paling awal </br>";
    }
    function nama(){
        echo "cecep</br>";
    }
}

$nampil = new manusia();
 echo $nampil->nama();

?>