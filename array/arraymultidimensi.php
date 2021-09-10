<?php
      
      $data = [
          [ "Nama" => "cecep" ,
             "buah" => [
             ["jenis" => "manggga"],
             ["jenis" => "apel"],
             ["jenis" => "jambu"]

      ]
          ]

      
      ];


      foreach ($data as $data2) {
          echo "Nama Pemilik : " . $data2  ['Nama'] . "<br>";
          echo "Buah Kesukaan : ";
          
          echo "<ul>";

          foreach ($data2['buah'] as $data3) {
              echo  "<ul>"."<li>".$data3 ['jenis'] . "</li>" . "</ul>";


              
          }
          echo "</ul>";
      }



?>