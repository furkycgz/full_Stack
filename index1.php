<?php

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", ".", ".", NULL];


array_pop($planets);
array_pop($planets);
array_pop($planets);


function rastgeledizi($planets, $sayi) {
    $randomKeys = array_rand($planets, $sayi);

    $yeniDizi = [];
    foreach ($randomKeys as $key) {
        $yeniDizi[] = $planets[$key];
    }


   foreach ($yeniDizi as $index => $deger) {
    echo "[$index] => $deger\n"."<br>";
}

  
}


rastgeledizi($planets, 2);
rastgeledizi($planets, 3);
rastgeledizi($planets, 2);
rastgeledizi($planets, 4);
rastgeledizi($planets, 5);

?>
