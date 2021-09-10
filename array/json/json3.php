<html>
    <body>

<?php $file ="latihan2.json";?>
<?php $anggota = file_get_contents($file);?>
<?php $data = json_decode($anggota);?>

<center>Data Film</center>
  <center><?php echo $data->Title. "<br>";?></center>
<center><img src="https://timlo.net/wp-content/uploads/2020/10/spider-verse.jpg " . alt="50" srcset="" width="800px"  height="400px""></center>
        <table>
        <tr>
            <td></td>
            <td></td>
            <td><?php echo $data->Plot;?></td>
        </tr>
              

        <tr>
            <td><b>Tahun Rilis</b></td>
            <td>:</td>
            <td><?php echo $data->Year;?></td>
        </tr>

        <tr>
            <td><b>Tanggal Rilis</b></td>
            <td>:</td>
            <td><?php echo $data->Released;?></td>
        </tr>

        <tr>
            <td><b>Durasi Film</b></td>
            <td>:</td>
            <td><?php echo $data->Runtime;?></td>
        </tr>

        <tr>
            <td><b>Genre</b></td>
            <td>:</td>
            <td><?php echo implode(",", $data->Genre);?></td>
        </tr>

        <tr>
            <td><b>Direktur</b></td>
            <td>:</td>
            <td><?php echo $data->Director;?></td>
        </tr>

        <tr>
            <td><b>Penulis</b></td>
            <td></td>
            <td>
                <ul>
                    <li>
                <?php echo implode("<li>",$data->Writers);?>
                </li>
                </ul>
            </td>
        </tr>
        
        <tr>
            <td><b>Pemeran</b></td>
            <td></td>
            <td>
                <ul>
                    <li>
                <?php echo implode("<li>",$data->Actors);?>
                </li>
                </ul>
            </td>
        </tr>

        <tr>
            <td><b>Bahasa</b></td>
            <td>:</td>
            <td><?php echo $data->Language;?></td>
        </tr>

        <tr>
            <td><b>Negara</b></td>
            <td>:</td>
            <td><?php echo $data->Country;?></td>
        </tr>

        <tr>
            <td><b>Penghargaan</b></td>
            <td>:</td>
            <td><?php echo $data->Awards;?></td>
        </tr>

        <tr>
            <td><b>Nilai</b></td>
            <td>:</td>
            <td><?php echo $data->imdbRating;?></td>
        </tr>
        
        <tr>
            <td><b>Vote</b></td>
            <td>:</td>
            <td><?php echo $data->imdbVotes;?></td>
        </tr>

        <tr>
            <td><b>imdbID</b></td>
            <td>:</td>
            <td><?php echo $data->imdbID;?></td>
        </tr>

 


  

        </table>
</body>
</html>