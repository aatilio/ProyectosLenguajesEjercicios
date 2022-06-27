<?php
$formatterES = new NumberFormatter("es-ES", NumberFormatter::SPELLOUT);
$n = 123.45;
$izquierda = intval(floor($n));
$derecha = intval(($n - floor($n)) * 100);
echo $formatterES->format($izquierda) . " . " . $formatterES->format($derecha);
// ciento veintitrés coma cuarenta y cinco
