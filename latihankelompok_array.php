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
                    <td>Jumlah Siswa</td>
                    <td>:</td>
                    <td><input type="number" name="jumlah"></td>
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
                            $jumlah = $_POST['jumlah'];
                        
                        ?>


                      <form action="latihanarray_1.php" method="POST">
                          <table> 
                          <?php
                          for ($i = 1; $i <= $jumlah; $i++) {

                          ?>

                          <tr>
                              <td></td>
                              <td></td>
                              <td>Data Siswa ke - <?php echo $i; ?> </td>
                          </tr>



                          <tr>
                              <td>Nis</td>
                              <td>:</td>
                              <td><input type="number" name="nis[]"></td>
                          </tr>


                          <tr>
                                <td>nama</td>
                                <td>:</td>
                                <td><input type="text" name="nama[]"></td>
                          </tr>
                              


                          <tr>
                                <td>Kelas</td>
                                <td>:</td>
                                <td><input type="text" name="kelas[]"></td>
                          </tr>
                          <tr>
                                <td>Bahasa Indonesia</td>
                                <td>:</td>
                                <td><input type="number" name="bahasa[]"></td>
                          </tr>
                          <tr>
                                <td>Bahasa Inggris</td>
                                <td>:</td>
                                <td><input type="number" name="inggris[]"></td>
                          </tr>
                          <tr>
                                <td>Matematika</td>
                                <td>:</td>
                                <td><input type="number" name="mtk[]"></td>
                          </tr>
                          <tr>
                                <td>Produkti</td>
                                <td>:</td>
                                <td><input type="number" name="produktif[]"></td>
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