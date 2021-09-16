<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>BINTANG JATUH
    </h2>
    <form method="POST" action="">
        <table>

        <tr>
            <td>Masukan Angka</td>
            <td> :
                <input type="text" name="angka">
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="simpan" value="KIRIM"</td>
        </tr>
        </table>
    </form>
    
</body>
</html>


<?php

if (isset($_POST['simpan'])) {
    $angka = $_POST['angka'];

for ($a = $angka; $a >= 0; $a--) {
    for($b=1; $b <= $a; $b++) {
        echo "&nbsp";
    }
    for ($c = $angka; $c >  $a; $c--) {
        echo "*";
    }
    echo "<br>";
}
}
?>