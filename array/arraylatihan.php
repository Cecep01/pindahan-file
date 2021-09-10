<?php

$data = [

    ["nama" => "olahraga",

    "cabang" => 
    [ 
        ["nama2" => "sepak bola",
            "nama3" => 
            [
                ["artikel" => "sepak bola nasional"],
                ["artikel" => "sepak bola nasional"]
            ]
    ],
        ["nama2" => "badminton",
        "nama3" =>
         [
            ["artikel" => "badminton kerad"],
            ["artikel" => "badminton goblok"]
        ] 
    
    ],
        ["nama2" => "atletik",
        "nama3" => 
        [
            ["artikel" => "lompat batu"],
            ["artikel" => "lompat ikan"]
        ]
        
        ]

    ]
    
    ] ,
    ["nama" => " politik",
    "cabang" => [
        ["nama2" => 'politik keras',
        "nama3" => 
        [
            ["artikel" => "penjahat goblok"],
            ["artikel" => "pencuri uang jalanan"]
        ]
        ]
    ]
    
    ] ,
    ["nama" => "ekonomi",
    "cabang" => [

        ["nama2" => "ekonomi sulit",
        "nama3" => 
        [
            ["artikel" => "ekonomi rendah"],
            ["artikel" => "sulit goblog"]
        ]
        
        ]
    ]
    ]
];

        echo "Jenis Berita : " . "<br>" ;
         
foreach ($data as $data2) {
    echo "<ul>". "<li>" .$data2['nama']. "</ul></li>". "<br>";
           
    echo "<ul>";
    foreach($data2['cabang']as $data3) {
        echo  "<li>".$data3['nama2'] .  "<br>" . "</li>";

        foreach($data3['nama3'] as $data4) {
            echo "<ul>";
            echo $data4['artikel'] . "<br>";
           
        }
        echo "</ul>";
    }
    echo "</ul>";
}






?>