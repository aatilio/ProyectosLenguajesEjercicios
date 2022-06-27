<?php
//ciclo o bucle de entrada controlada
$ciclo = 1;
$cad = "while";
$c = "";
while ($ciclo < 12) {
    echo "$c <br>";
    $c.= $cad;
    $ciclo++;
}
//ciclo o bucle de salida controlada
$ciclo = 1;
$cad = "DoWhile";
$dw = "";
do {
    echo "$dw <br>";
    $dw .= $cad;
    $ciclo++;
} while ($ciclo < 12);
// ciclo o bucle automatico
$cad = "For";
$f = "";
for ($ciclo = 1; $ciclo < 12; $ciclo++) {
    echo "$f <br>";
    $f .= $cad;
}
?>