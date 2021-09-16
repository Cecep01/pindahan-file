<?php

for($a =0; $a <= 5; $a--){
    for ($b = 0; $b<=$a; $b++){
    echo"&nbsp";
    }
    for($c=6; $c>$a; $c--){
    echo"&nbsp*";
    }
    echo"<br>";
    }
   
    
    
    for ($a = 0; $a <= 5; $a++) {
        for($b = 0; $b < $a; $b++) {
            echo "&nbsp";
        }
        for ($c = 5; $c >= $a; $c--) {
            echo "&nbsp*";
        }
        echo "<br>";
    }
  for ($a = 1; $a <= 5; $a++) {
      for($c =1; $c <= $a; $c++) {
          echo "&nbsp";
      }
      echo "<br>";
  }
  