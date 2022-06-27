<?php
//def mat 
$paises = array("Peru" => "Lima", "Francia" => "Paris", "India" => "Delhi");
//crea objeto ArrayIterador 
$iterador = new ArrayIterator($paises);
//puntero al inicio 
$iterador->rewind();
//listado 
while ($iterador->valid()) {
    echo $iterador->current() . " es capital de " . $iterador->key() . "<br>";
    $iterador->next();
}
