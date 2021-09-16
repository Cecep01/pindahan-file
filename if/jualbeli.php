<?php
$jenis = "minuman";
$menu ="jus";
$jumlah = 8;

if ($menu == "mie goreng") {
    echo "Jenis Makanan : $jenis <br>" ;
    echo "Menu Makanan : $menu<br>";
    echo "Jumlah : $jumlah<br>";
    $harga_nasi = 10000;
    $total = $harga_nasi * $jumlah;
    echo "total : $total<br>";

    if ($total >= 50000) {
        $dis = $total * 0.2;
        echo "Diskon 20% : $dis <br>";

    } 
    $total_bayar = $total - $dis;
    echo "total bayar : $total_bayar";

} else if($menu == "jus") {
    echo "Jenis : $jenis<br>";
    echo "Menu Minuman : $menu <br>";
    echo "Jumlah : $jumlah<br>";
    $harga_jus = 6000;
    $total = $harga_jus * $jumlah;
    echo "Total : $total";

}




?>