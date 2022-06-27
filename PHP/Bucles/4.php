<?php
// uso de break en while, for
//Abortar con la instrucccion Break en cualquier puento que se requiera
echo "Abortar ciclo con while <br>";
$c = 1;
while ($c <= 5) {
    if ($c == 3) {
        break;
    }
    echo "Iteracion Nro. $c <br>";
    $c++;
}
echo "Abortar ciclo con do while <br>";
$c = 1;
do {
    if ($c == 4) {
        break;
    }
    echo "Iteracion Nro. $c <br>";
    $c++;
} while ($c <= 5);
echo "Abortar ciclo con for <br>";
for ($c = 1; $c < 8; $c++) {
    if ($c == 5) {
        break;
    }
    echo "Iteracion Nro. $c <br>";
}
?>