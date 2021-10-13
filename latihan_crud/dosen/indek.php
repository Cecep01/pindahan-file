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
    <h1 class="text-center">Rental Mobil</h1>

         
    <div class="justify-content-center align-items-center d-flex">
        <div class="col-md-5">

            <div class="card">
                <div class="card-title mt-4">
    
                <div class="p-3">
                    <h4 class="text-center">Rental Mobil</h4>
                    </div>
                </div>

                <form method="POST" action="tampil.php">

                    <div class="card-body">
                        <div class="form-group mb-3 ">
                            <div class="p-2">
                                <label for="exampleInputname">Nama Mobil</label>
                                <input type="text" name="no" class="form-control" id="exampleInputname" aria-describedby="emailHelp">
                            </div>
                        </div>

                            <div class="form-group">
                                <label for="exampleInputname1">Nama Peminjam</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputname1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputname1">Masukan Nik</label>
                                <input type="text" name="nik" class="form-control" id="exampleInputname1">
                            </div>
                            <label for="exampleInputname1">Nama Peminjam</label>
                            <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Laki-Laki
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        Perempuan
                    </label>
                    </div>
                    <div class="form-group">
                                <label for="exampleInputname1">Nama Peminjam</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputname1">
                            </div>
               
                             
                            <div class="form-group">
                                <label for="disabledSelect">Jenis Mobil</label>
                                <select id="disabledSelect" name="jenis" class="form-control">
                                <option>Pilih Jenis Mobil</option>
                                    <option>Sport</option>
                                    <option>Sedan</option>
                                    <option>Suv</option>
                                    <option>Station Wagon</option>
                                    <option>Coupe</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="disabledSelect">Merk Mobil</label>
                                <select id="disabledSelect" name="merk " class="form-control">
                                <option>Pilih Merk Mobil</option>
                                    <option>Toyota</option>
                                    <option>Honda</option>
                                    <option>Suzuki</option>
                                    <option>Isuzu</option>
                                    <option>Daihatsu</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputname1">No Plat Mobil</label>
                                <input type="text" name="plat 
                                " class="form-control" id="exampleInputname1">
                            </div>




                            <button type="submit" name="simpan" class="btn btn-primary me-5">Submit</button>
                            <button type="reset" class="btn btn-danger">RESET</button>

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