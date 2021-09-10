<?php

for ($a = 1; $a <= 5; $a++) {
    for ($b = 5; $b > $a; $b++ ) {
        echo "";
    }
    for ($k = 1; $k <= (2 * $a - 1); $k++) {
        echo "*";
    }
    echo "<br>"
;}
?>