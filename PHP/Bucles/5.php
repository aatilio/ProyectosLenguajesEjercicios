<?php
// uso de continue en while, for
//la instruccion continuen deja que la ejecucion se realise con normalidad
echo "Pasar ciclo con while <br>";
$c = 0;
while ($c <= 5) {
    $c++;
    if ($c == 3) {
        continue;
    }
    echo "Iteracion Nro. $c <br>";
}
echo "Pasar ciclo con do while <br>";
$c = 0;
do {
    $c++;
    if ($c == 4) {
        continue;
    }
    echo "Iteracion Nro. $c <br>";
} while ($c <= 5);
echo "Pasar un ciclo con for <br>";
for ($c = 1; $c < 8; $c++) {
    if ($c == 5) {
        continue;
    }
    echo "Iteracion Nro. $c <br>";
}
?>