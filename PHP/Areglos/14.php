<?php
$ciudades = array("Lima", "Arequipa", "Trujillo", "Tacna", "Iquitos"); 
//listado con foreach 
echo "Listado con foreach() <br>";
foreach ($ciudades as $c) {
    echo $c . "<br>";
}
echo "<br><br>";
//uso de bucle foreach con matriz asociativa
$paises = array("Peru" => "Lima", "Francia" => "Paris", "India" => "Dlhi");
//listado 
foreach ($paises as $clave => $valor) {
    echo "$valor es la capital de $clave <br>";
}
