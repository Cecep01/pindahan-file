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
     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Home</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost/tugas_project/admin/jenis_2/index.php">Jenis Mobil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/tugas_project/admin/pelanggan/index.php">Data Pelanggan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Data Mobil</a>
            </li>
           
           
        </div>
        </nav>
   <div class="p-4">
   
    <div class="justify-content-center align-items-center d-flex">
        <div class="col-md-7">
            <div class="p-4">
            <center><h2>Data Mobil</h2></center>
            </div>

    <div class="card">
   
        <div class="card-header bg-primary text-white">
                Data Mobil
        </div>
        <div class="p-2">
        <div class="card-body">
       
     
</div>
            <table class="table table-bordered table-striped">
            <tr>
                <th>No</th>
                <th>Merek</th>
                <th>No Plat</th>
                <th>Warna</th>  
                <th>Nama Mobil</th>              
                <th colspan="4"><center>Aksi</center></th>
            </tr>
            <?php
include '../../database.php';
$dosen = new Mobil();
$no = 1;
// var_dump($dosen->index());
foreach ($dosen->index() as $data) {
    ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['merek']; ?></td>
                    <td><?php echo $data['no_plat']; ?></td>
                    <td><?php echo $data['warna']; ?></td>
                    <td><?php echo $data['nama_jenis']; ?></td>
                    
                    <td>
                        <a href="http://localhost/tugas_project/admin/mobil/show.php? id=<?php echo $data['id']; ?>"  class="btn btn-primary">Show</a>
                    </td>
                    <td>
                        <a href="http://localhost/tugas_project/admin/mobil/edit.php?id=<?php echo $data['id']; ?>" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                    <a href="create.php" class="btn btn-danger">Tambah</a>
                    </td>
                    <td>
                        <form action="http://localhost/tugas_project/admin/mobil/proses.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                            <input type="hidden" name="aksi" value="delete">
                            <button type="submit"  class="btn btn-danger" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            <?php
}
?>
            </table>
            
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

