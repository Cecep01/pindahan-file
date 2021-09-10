<?php 

$artikels = [
    [
        'namaArtikel' => 'detik.com',
        'jenisArtikel' => [
            [
                'namaArtikel' => 'olahraga',
                'jenisOlahraga' => [
                    ['namaOlahraga' => 'Sepak Bola',
                    'jenisOlahraga' => [
                        ['namaOlahraga' => 'Sepak Bola Nasional'],
                        ['namaOlahraga' => 'Sepak Bola Internasional']
                    ]
                ],
                    ['namaOlahraga' =>'Bulu Tangkis',
                'jenisOlahraga' => [
                    ['namaOlahraga' => 'Bulu Tangkis Bola Nasional'],
                    ['namaOlahraga' => 'Bulu Tangkis Internasional']
                ]
                ],

                ['namaOlahraga' => "atletik",
                'jenisOlahraga' => [
                    ['namaOlahraga' => 'Bulu Tangkis Bola Nasional'],
                    ['namaOlahraga' => 'Bulu Tangkis Internasional']
                    
                ]
                
                ]
            
                ]
            ],
            [
            'namaArtikel' => 'ekonomi',
                'jenisOlahraga' => [
                    ['namaOlahraga' => 'politik',
                    'jenisOlahraga' => [
                        ['namaOlahraga' => 'Saham '],
                        ['namaOlahraga' => 'bank']
                    ]
                ],
                ['namaOlahraga' =>'ekonomi',
                'jenisOlahraga' => [
                    ['namaOlahraga' => 'tukang bandros'],
                    ['namaOlahraga' => 'tukang cilok']
                ]
                ],

                
                ]
            ]
        ]
    ]


        
];

foreach($artikels as $namaArtikel){
    echo "Artikel :". $namaArtikel['namaArtikel']."<br>";
    echo "Jenis Berita <br>";
    echo "<ul>";
    foreach($namaArtikel['jenisArtikel'] as $jenisArtikel){
        echo "<ul>";
        echo "<li>".$jenisArtikel['namaArtikel']."<br>" . "</li>";
              echo "</il>";
        foreach($jenisArtikel['jenisOlahraga'] as $olahraga){
            echo "<ul>";
            echo "<li>".$olahraga['namaOlahraga']."<br>";
                  echo "</ul>";

            foreach($olahraga['jenisOlahraga'] as $permainan){
                echo "<ul>";
                echo "<ul>" . $permainan['namaOlahraga']."<br>"  ."</ul>";
                echo "</ul>";
            }
        }
    }
}
?>