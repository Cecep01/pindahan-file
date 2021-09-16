<?php
$kelas = "XIr";
$nilai = 76;

if ($kelas == "X" || $kelas == "x") {
    if ($nilai >= 75) {
        echo "selamat anda lulus";
    } else {
        echo " selamat anda tidak lulus";
    }
} else if ($kelas == "XI" || $kelas == "xi")  {
    if ($nilai >= 78  ) {
        echo "Selamat anda lulus";
    } else {
        echo "selamat anda tidak lulus";
    }
} else if ($kelas == "XII" || $kelas == "xii") {
    if ($nilai >= 80 ) {
        echo "selamat anda lulus";
    } else {
        echo "selamat anda tidak lulus";
    }
} else {
    echo "gak ada kelas";
}
?>