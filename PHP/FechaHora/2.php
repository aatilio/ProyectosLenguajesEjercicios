<?php
//obtiene fecha hora 
$hoy = getdate();
print_r($hoy);
echo "<br> Fecha y Hora actual: " . $hoy['hours'] .
    ":" . $hoy['minutes'] . ":" . $hoy['seconds'] .
    " del " . $hoy['mday'] . "-" . $hoy['mon'] .
    "-" . $hoy['year'];
