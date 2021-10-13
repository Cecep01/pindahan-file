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

          <style>
            body {
                background-color: orange;

            }
              
          </style>
    <div class="justify-content-center align-items-center d-flex">
        <div class="col-md-5">

            <div class="card">
                <div class="card-title mt-4">
                <center><img src="p.png" />
                <div class="p-3">
                    <h4 class="text-center">Penggajihan</h4>
                    </div>
                    <h4 class="text-center">Guru / karyawan yayasan assalam</h4>
                    <hr>
                </div>

                <form method="POST" action="tampil.php">

                    <div class="card-body">
                        <div class="form-group mb-3 ">
                            <div class="p-2">
                                <label for="exampleInputname">NO</label>
                                <input type="text" name="no" class="form-control" id="exampleInputname" aria-describedby="emailHelp">
                            </div>
                        </div>

                            <div class="form-group">
                                <label for="exampleInputname1">Nama</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputname1">
                            </div>
                             
                            <div class="form-group">
                                <label for="disabledSelect">Unit</label>
                                <select id="disabledSelect" name="unit" class="form-control">
                                    <option>TK</option>
                                    <option>SD</option>
                                    <option>SMP</option>
                                    <option>SMA</option>
                                    <option>SARJANA</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputname1">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" id="exampleInputname1">
                            </div>


                            <center>
                                <h3>Gaji</h3>
                            </center>

                            <div class="form-group">
                                <label for="disabledSelect">Jabatan</label>
                                <select id="disabledSelect" name="jabatan" class="form-control">
                                    <option value="Kepala Sekolah">kepala sekolah </option>
                                    <option value="guru">guru</option>
                                    <option value="karyawan">karyawan</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="exampleInputname1">Lama Kerja</label>
                                <input type="number" name="lama" class="form-control" id="exampleInputname1">
                            </div>



                            <div class="form-group">
                                <label for="disabledSelect">Status Kerja</label>
                                <select id="disabledSelect" name="status" class="form-control">
                                    <option value="pegawai tetap">Pegawai Tetap</option>
                                    <option value="pegawai kontrak">Pegawai Kontrak</option>

                                </select>
                            </div>

                            <center>
                                <h3>Potongan</h3>
                            </center>

                            <div class="form-group">
                                <label for="exampleInputname1">Bpjs</label>
                                <input type="text" name="bpjs" class="form-control" id="exampleInputname1">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputname1">Pinjaman</label>
                                <input type="number" name="pinjam" class="form-control" id="exampleInputname1">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputname1">Tabungan</label>
                                <input type="number" name="tabung" class="form-control" id="exampleInputname1">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputname1">Lainnya</label>
                                <input type="number" name="lain" class="form-control" id="exampleInputname1">
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