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
            <h2>
                GARUDA JAYA
            </h2>
            <div class="form-group">
                <label for="exampleInputname">NAMA BENDAHARA</label>
                <input type="text" name="nama" class="form-control " id="exampleInputname" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputname1">Nama Pekerja</label>
                <input type="text" name="nama1" class="form-control" id="exampleInputname1">
            </div>
            <fieldset class="form-group row">
                <legend class="col-form-label col-sm-2 float-sm-left pt-0">Jenis Kelamin</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" id="gridRadios1" value="LAKI-LAKI">
                        <label class="form-check-label" for="gridRadios1">
                            LAKI-LAKI
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" id="gridRadios2" value="PEREMPUAN">
                        <label class="form-check-label" for="gridRadios2">
                            PEREMPUAN
                        </label>
                    </div>

                </div>
            </fieldset>
            <div class="form-group">
                <label for="exampleInputname1">Tanggal Gaji</label>
                <input type="date" name="tanggal" class="form-control" id="exampleInputname1">
            </div>



            <!-- menampilkan jabatan -->

            <div class="form-group">
                <label for="disabledSelect">Jabatan</label>
                <select id="disabledSelect" name="jabatan" class="form-control">
                    <option value="direktur">Direktur</option>
                    <option value="manager">Manager</option>
                    <option value="karyawan">Karyawan</option>
                    <option value="ob">Ob</option>
                </select>
            </div>

            <!-- menampilkan pendidikan terakhir -->
            <div class="form-group">
                <label for="disabledSelect">Pendidikan Terakhir</label>
                <select id="disabledSelect" name="pendidikan" class="form-control">
                    <option value="sd">SD</option>
                    <option value="smp">SMP</option>
                    <option value="sma">SMA</option>
                    <option value="s1">S1</option>
                </select>
            </div>


            <!-- menampilkan lembur -->

            <div class="form-group">
                <label for="exampleInputname">lembur</label>
                <input type="text" name="lembur" class="form-control" id="exampleInputname" aria-describedby="emailHelp"> RP.20.000
            </div>

            <div class="form-group">
                <label>Potongan</label>
                <input type="text" name="potong" class="form-control" id="exampleInputname" aria-describedby="emailHelp">
            </div>

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
</body>

</html>
<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $nama1 = $_POST['nama1'];
    $jk = $_POST['jk'];
    $tanggal = $_POST['tanggal'];
    $jabatan = $_POST['jabatan'];
    $pendidikan = $_POST['pendidikan'];
    $lembur = $_POST['lembur'];
    $pot = $_POST['potong'];
    




    $vakasi_lembur = $lembur * 20000;


    if ($pendidikan == "sd") {
        $tunjangan = 250000;
    } else if ($pendidikan == "smp") {
        $tunjangan = 500000;
    } else if ($pendidikan == "sma") {
        $tunjangan = 1000000;
    } else if ($pendidikan == "s1") {
        $tunjangan = 1500000;
    } else {
        echo "kunn ai sia";
    }


    if ($jabatan == "direktur") {
        $rektur = 10000000;
    } else if ($jabatan == "manager") {
        $rektur = 7500000;
    } else if ($jabatan == "karyawan") {
        $rektur = 5000000;
    } else if ($jabatan == "ob") {
        $rektur = 2500000;
    } else {
        echo "milih hela";
    }
    // hasill total dari rektur tunjangan lembur dan  potongan  


    $total = $rektur + $tunjangan + $vakasi_lembur - $pot;





    //menampilkan
    echo "<table>";



    echo "<tr>";

    echo "<td><br><b><i>Gaji Pokok</b></i> </td>";
    echo "<tr>";
    echo "<tr>";
    echo "<td><td><td><td><td><td><td><td>tanggal</td> <td>:</td> <td>$tanggal</td><br>";
    echo "</tr>";



    echo "<tr>";
    echo "<td>Nama Karyawan</td> <td>: <td>$nama1</td>  <br>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Jenis Kelamin</td> <td>:</td> <td>$jk</td> <br>";
    echo "</tr>";



    echo "<tr>";
    echo "<td>Tunjangan Pendidikan</td> <td>:</td>  <td>$tunjangan</td><br>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Jabatan</td> <td>:</td> <td>$jabatan</td> <br>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Gaji</td> <td>:</td> <td>$rektur</td><br>";
    echo "</tr>";
    echo "<tr>";

    echo "<td><br><b><i>Tunjangan</b></i> </td>";

    echo "<tr>";
    echo "<td>vakasi lembur</td> <td>:</td> <td>$vakasi_lembur</td><br>";
    echo "</tr>";

    echo "<tr>";

    echo "<td><br><b><i>Potongan</b></i> </td>";
    echo "<tr>";
    echo "<td>potongan</td> <td>:</td> <td>$pot</td> <br><br>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Total Gaji</td> <td>:</td> <td>$total</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><td><td><td><td><td><td><td>  Nama Bendahara <td>: <td>$nama</td> <br>";
    echo "</tr>";

    echo "</table>";
}
?>
</center>

</body>

</html>