<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  <form method="POST" action="">
  <center>
            
                <div class="container">
                    <center>
                    <h2>Pengulangan</h2>
                    
                    <p>1. Deret Bilangan Ganjil</p>
                    <p>2. Segitga Sama Kaki Terbalik</p>
                    <p>3. Deret bilangan kelipatan 3</p>
            <div class="form-group">
                <label for="exampleInputname">Pilih </label>
                <input type="text" name="pilih" class="form-control" id="exampleInputname" aria-describedby="emailHelp">
            </div>

            <!-- menampilkan umur -->

            <div class="form-group">
                <label for="exampleInputname">Masukan Angka</label>
                <input type="number" name="masuk" class="form-control" id="exampleInputname" aria-describedby="emailHelp">
            </div>


            <!-- menampilkan status udah di vaksin apa belum -->

          


            <!-- kirim -->

            
            <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
            </div>
        

             <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
    </form>
  

                <?php
                echo "<br>";
                                if (isset($_POST['simpan'])) {
                                    $pilih = $_POST['pilih'];
                                    $masuk = $_POST['masuk'];
                                    if ($pilih == 1) {
                                        
for ($x = 1; $x <= $masuk; $x++) {
    $x % 2 == 1;
    echo "   $x ";
    $x++;
}
                                    } else if ($pilih == 2) {
                                        for ($i = $masuk; $i >= 1; $i--) {
                                            for ($n =$masuk; $n >= $i; $n--) {
                                                echo "&nbsp";
                                            }
                                            for ($g = 1; $g <= $i; $g++) {
                                                echo "&nbsp*&nbsp";
                                            }
                                            echo "<br>";

                                    }
                                } else if ($pilih == 3) {
                                    for ($a =3 ; $a <= $masuk; $a++){
                                        if ($a %3 == 0) {
                                            echo "   $a";
                                        }
                                    }
                                    }
                            }
                ?>
            </center>
        </body>
        </html>