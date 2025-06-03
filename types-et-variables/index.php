<?php

$nb = 42;

echo $nb . "<br>";

$str = "La vie l'univers et tout le reste";

echo $str . "<br>";

$nbrstr = $nb . $str;
    
echo $nbrstr;

/////////////////////////////////////////////////////

$nb_tab = [12, 42, 12 , 12.4, 15.2, 11.4] ;

print_r($nb_tab);



$str_tab = ["Bonjour", "PHP", "42", "La vie", "univers"];

print_r($str_tab);

//////////////////////////////////////////////

$animal = [
    
    "espece" => "huesos"
    ,
    
    "name" => "Ruby"
    ,
    "age" => 10

    ];

 print_r($animal);

/////////////////////////////////////////////

$data = (float) 42.0;

echo ($data) . "<br>";

$int = (int) $data;

echo ($int) . "<br>";

$str = (string) $int;

echo($str) . "<br>";

?>

