<?php
//definir funcion al inicio
function cambiaDato()
{
    global $rp;
    $rp = 2020;
}
$rp = 5050;
echo "1ro valor de rp: $rp";
//llamar y usar la funcion
cambiaDato();
echo "<br> 2do valor de rp: $rp";
