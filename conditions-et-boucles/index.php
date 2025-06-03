<?php

$animals = ["Chat", "Chien", "Lapin", "Souris"];

$i = 0;


for($i = 0; $i < count($animals); $i++) {
    
    echo "{$animals[$i]} <br>";
}


$numbers = [28, 32, 44, -67, 18, 24, -98];

for($i = 0; $i < count($numbers); $i++) {
    if($numbers[$i] < 0) {
        echo $numbers[$i] . "<br>";
    }
}

$user = [
    "name" => "David",
    "age" => 20
];
 
 foreach($user as $key => $user1)
 {
     echo "My $key : $user1 <br>";
 }

$users = [
    [
        "firstName" => "Hugues",
        "lastName" => "Froger"
    ],
    [
        "firstName" => "Mari",
        "lastName" => "Doucet"
    ]
];


foreach($users as $user) {
    foreach($user as $key => $value) {
        echo "$value ";
    }
    echo "<br>";
}
?>