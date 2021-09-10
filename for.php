<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form biodata</title>
</head>
<body>
    <h2>form data</h2>
    <form method="POST" action="">
    <table>
        <tr>
            <td>Masukan Angka </td>
            <td> :
                <input type="text" name="angka"><br>
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
    $angka = $_POST['angka'];

for ($a = 0; $a <= $angka; $a++) {
    echo "angka : $a <br>";
}
}

?>