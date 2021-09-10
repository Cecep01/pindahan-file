<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="" method="POST">
            <h2>Data Siswa Kelas 12 </h2>
            <table>
                <tr>
                    <td>Masukan Nilai</td>
                    <td>:</td>
                    <td><input type="number" name="nilai"></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="proses" value="proses"> </td>
                </tr>
            </table>
            <br>
                        </form>


                        <?php
                        if (isset($_POST['proses'])) {
                            $nilai = $_POST['nilai'];
                        
                        ?>


                      <form action="pemanggilan.php" method="POST">
                          <table> 
                          <?php
                          for ($i = 1; $i <= $nilai; $i++) {

                          ?>

                          <tr>
                              <td></td>
                              <td></td>
                              <td>Maneh Hayang Menu Nn <?php echo $i; ?> </td>
                          </tr>



                          <tr>
                              <td>Nasi Goreng</td>
                              <td>:</td>
                              <td><input type="number" name="nasi[]"></td>
                          </tr>


                          <tr>
                                <td>mie goreng</td>
                                <td>:</td>
                                <td><input type="number" name="mie[]"></td>
                          </tr>
                              


                          <tr>
                                <td>Ayam Goreng</td>
                                <td>:</td>
                                <td><input type="number" name="ayam[]"></td>
                          </tr>
                         


                          <?php
                          }
                          ?>

                          <tr>
                              <td></td>
                              <td></td>
                              <td><input type="submit" name="simpan" value="simpan"></td>
                          </tr>
                        </table>
                      </form>
                      <?php

                        }
                        ?>
    </center>
    
</body>
</html>