<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
    <table>

<tr>
            <td>Masukan Bintang</td>
            <td>:
            <input type="text" name="bintang">
        </tr>
        <tr>
            <td></td>
    
            <td><input type="submit" name="simpan" value="KIRIM"></td>
        </tr>
        </table>
    </form>
    
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
    $bintang = $_POST['bintang'];


for ($k =1; $k <= $bintang; $k++) {
    for ($h = $bintang; $h >= $k; $h--) {
        echo "&nbsp";
    }
    for ($d = 1; $d <= $k; $d++) {
        echo "&nbsp*&nbsp";
    }
    echo "<br>";
}

for ($i = $bintang; $i >= 1; $i--) {
    for ($n =$bintang; $n >= $i; $n--) {
        echo "&nbsp";
    }
    for ($g = 1; $g <= $i; $g++) {
        echo "&nbsp*&nbsp";
    }
    echo "<br>";
}
}

?>