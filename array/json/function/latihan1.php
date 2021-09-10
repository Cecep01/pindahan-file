<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cecep Superi</title>
</head>
<body>
      <fieldset>
   <legend>Lingkaran</legend>
   <form method="POST" action="">
     <table>
     <tr>
            <td>Masukan Jari</td>
            <td>:
            <input type="text" name="bil"><br>
        </tr>
        <tr>
            <td>Masukan Keliling</td>
            <td>:
            <input type="text" name="bil1"><br>
        </tr>
        <tr>
            <td>Masukan Luas</td>
            <td>:
            <input type="text" name="bil2"><br>
        </tr>
        <tr>
            <td></td>
    
            <td><input type="submit" name="masuk" value="KIRIM"></td>
        </tr>
        </fieldset>  
     </table>
  
   <?php
   if (isset($_POST['masuk'])) {
       $bil = $_POST['bil'];
       $bil1 = $_POST['bil1'];
       $bil2 = $_POST['bil2'];


       function luas ($bil1 , $phi = 3.14) {

        $luas = $phi * $bil1 * $bil1;
        return $luas;
       }

       function kel ($bil2 , $phi = 3.14) {
           $kel = 2 * ($phi * $bil2);
           return $kel;

       }
?>

       jari jari = <?php echo $bil ; ?> <br>
       Keliling Lingkaran = <?php echo luas($bil1) ?> <br>
       luas Lingkaran= <?php echo kel($bil2) ?> <br>
<?php
   }
   
   ?>


   </form>

    
</body>
</html>