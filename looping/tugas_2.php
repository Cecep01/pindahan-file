
<?php
 $d = 0;
for ($a = 1; $a <= 10 ; $a++)
{
    $d += 2;
    for ($i = 1; $i <= $a; $i++) {
       
       

        $c = $i + $d;
        echo "$c";

    }
    echo "<br>";
}

for ($a = 1; $a <= 5; $a++) {
    for ($b = 1; $b <=5; $b++) {
        $c = $b + $a; ;
        echo "$c";
    
    }
    echo "<br>";
}

?>