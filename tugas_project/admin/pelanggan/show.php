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
<?php
include '../../database.php';
$dosen = new pelanggan();
foreach ($dosen->edit($_GET['id']) as $data) {
    $id = $data['id'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $jk = $data['jk'];
    $no_hp = $data['no_hp'];

   
}
?>
   <div class="p-4">
   
    <div class="justify-content-center align-items-center d-flex">
        <div class="col-md-5">

    <div class="card">
   
        <div class="card-header bg-primary text-white">
            Show Pelanggan
        </div>
        <div class="card-body">
        <div class="form-group">
                    <label>Nama Pelanggan</label>
                    <input type="text" name="nama" class="form-control" placeholder="masukan nama" value="<?php echo $nama; ?>"required>
</div>
<div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="masukan alamat" value="<?php echo $alamat; ?>"required>
</div>
<div class="form-group">
                    <label>Jenis Kelamiin</label>
                    <input type="text" name="jk" class="form-control" placeholder="masukan" value="<?php echo $jk; ?>"required>
</div>
<div class="form-group">
                    <label>No Telepon</label>
                    <input type="number" name="no_hp" class="form-control" placeholder="masukan no hp" value="<?php echo $no_hp; ?>"required>
</div>
</div>
                


        </div>
    </div>
    </div>
</div>
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
</body>

</html>