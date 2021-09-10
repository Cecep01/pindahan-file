<?php

$nilai = -1;
if ($nilai >= 90 && $nilai <= 100 ) {
    echo " grade a";
} else if($nilai >= 80 && $nilai <= 89) {
    echo " grade b";

} else if($nilai >= 70 && $nilai <= 79) {
    echo "grade c";

} else if($nilai >= 60 && $nilai <= 69) {
    echo "grade d";
} else if($nilai <60 && $nilai >= 0 ) {
    echo "nilai grade e";

} else {
    echo " nilai aweh ";
}
{

    $total = $ayam * $jumlah ;
    $js = $total * 0.2;
    $ko = $total - $js;
    echo "jumlah = $jumlah <br>";
    echo "total : $total <br>";
    echo "diskon : $js <br>";
    echo "total bayar : $ko";
}
?>