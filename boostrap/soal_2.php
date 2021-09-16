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
                    <h2>Syarat Masuk Ke Miko Mall</h2>
            <div class="form-group">
                <label for="exampleInputname">NAMA </label>
                <input type="text" name="nama" class="form-control" id="exampleInputname" aria-describedby="emailHelp">
            </div>

            <!-- menampilkan umur -->

            <div class="form-group">
                <label for="exampleInputname">Umur</label>
                <input type="number" name="umur" class="form-control" id="exampleInputname" aria-describedby="emailHelp">
            </div>


            <!-- menampilkan status udah di vaksin apa belum -->

            <div class="form-group">
            <label for="disabledSelect">Status Vaksin</label>
            <select id="disabledSelect" name = "status_vaksin" class="form-control">
                <option>Sudah Vaksin</option>
                <option>Belum Vaksin</option>
               
            </select>
            </div>
                   


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
    
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $status_vaksin = $_POST['status_vaksin'];

    echo "<br> Nama Anda : $nama <br>";
    echo "Umur : $umur <br>";
    echo "Status Vaksin : $status_vaksin <br>";

    if(($umur >=12 && $umur <= 50) && $status_vaksin == "Sudah Vaksin"){
        echo "diizinkan";
    }else if(($umur >= 12 && $umur <= 50) && $status_vaksin == "Belum Vaksin"){
        echo "tidak diizinkan <br>";
        ?> <a href="https://pedulilindungi.id/">Daftar Vaksin Disini</a>
        <?php 
    }else if($status_vaksin == "Belum Vaksin"){
        echo "tidak diizinkan <br>";
        ?> <a href="https://pedulilindungi.id/">Daftar Vaksin Disini</a>    
        <?php
    }else{
        echo "tidak diizinkan";
    }
}
?>
</center>
</body>
    </html>