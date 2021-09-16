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
            <td>Masukan Angka</td>
            <td>:
            <input type="text" name="angka">
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
    

    switch ($angka) {
        case 1:
        echo "ini angka angka adalah satu";
        break;
        case 2:
        echo "ini angka angka adalah dua";
        break;
        case 3:
        echo "ini angka angka adalah tiga";
        break;
        case 4:
        echo "ini angka angka adalah empat";
        break;
        case 5:
        echo "ini angka angka adalah lima";
        break;
        case 6:
        echo "ini angka angka adalah enam";
        break;
        default ;
        echo "variabel GAK ADA";
        break;
    }
}

?>