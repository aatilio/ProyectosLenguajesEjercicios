<?php
//datos a grabar 
$datos = "Esta es una prueba de grabar No 01";
file_put_contents("archivoGravado.txt", $datos) or die("ERROR: no se pudo grabar...");
echo "<br> Los datos fueron grabados Ok";
//leer archivo grabado
$cad = file_get_contents("archivoGravado.txt") or die("ERROR: no esta el archivo...");
echo "<br> Los datos leidos son: $cad";
