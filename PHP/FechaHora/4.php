<?php
//prueba 31 de febrero 
if (checkdate(05, 31, 2022)) {
    echo "Fecha valida";
} else {
    echo "Fecha No valida";
}
$cad = "2 de Octubre 2020";
echo "<br>" . date("d M Y", strtotime($cad));
echo "<br>" . date("D", mktime(0, 0, 0, 10, 5, 2022));
echo "<br> " .
    gmdate("H : i : s d - M - Y", mktime(0,0,0,28,05,2022));
echo "<br> " .
    gmdate("H : i : s d - M - Y", mktime(8, 15, 33, 30, 5, 2022));
