<?php
$temp = array(
    1 => 17, 2 => 27, 3 => 8, 4 => 13, 5 => 21,
    6 => 22.58, 7 => 17, 8 => 19, 9 => 22, 10 => 27,
    11 => 5, 12 => 24, 13 => 66, 14 => 16, 15 => 27,
    16 => -2, 17 => 20, 18 => 28, 19 => 20, 20 => 27,
    21 => 14, 22 => 18, 23 => 13, 24 => 6, 25 => 24,
    26 => 26, 27 => 21, 28 => 19, 29 => 23, 30 => 45,
);

$may = -100;
$men = 100;
$contador = 1;
$sum = 0;
$promedio;
$diama;
$diame;

foreach ($temp as $key => $value) {
    $contador = $contador + 1;
    if ($value > $may) {
        $may = $value ;
        $diama = $key;
    }
    if ($value  < $men) {
        $men = $value ;
        $diame = $key;
    }
    $sum = $sum + $value ;
}

$promedio = $sum / $contador;

echo "<br>La mayor temperatura registrada fue el dia " .$diama. " con una intencidad de ". $may;
echo "<br>La menor temperatura registrada fue el dia " .$diame. " con una intencidad de ". $men;
echo '<br>La temperatura promedio en todo el mes fue '. $promedio;

