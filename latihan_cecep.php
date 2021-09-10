<?php

for ($a = 2; $a <= 35; $a+=2) {
    echo "$a";

}
 echo "<br>";
for ($b = 1; $b <= 10; $b++) {
    for ($a = 1; $a >= $b; $a--) {
        echo "  &nbsp";
    }

    for ($f = 1; $f <= $b; $f++) {
        echo "*";
    }
    echo "<br>";
}

 for ($a = 5; $a >= 0; $a--) {
     for ($c = 5; $c >= $a; $c--) {
         echo "&nbsp";
     }
     for ($l = 1; $l <= $a; $l++) {
         echo "*";
     }
     echo "<br>";
 }


 for ($a = 1; $a <= 25; $a+=2) {
     echo "  $a";
 }
    
 echo "<br>";
 echo "<hr>";
     

 for ($b = 0; $b <= 5; $b++) {
     for ($c = 5; $c >= $b; $c--) {
         echo "&nbsp";

     } 
     for ($x = 0; $x <= $b; $x++ ) {
         echo "*";
     }
     echo "<br>";
 }
           
 echo "<hr>";

  for ($l = 5; $l >= 0; $l--) {
      for ($p = 5; $p >= $l; $p--) {
          echo "&nbsp";
      }
      for ($n = 0; $n <= $l; $n++) {
          echo "*";
      }
      echo "<br>";
  }


?>

