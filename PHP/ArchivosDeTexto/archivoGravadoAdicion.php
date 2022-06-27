<?php 
//datos a grabar 
$datos = "\n<br>Esta es una segunda prueba de grabar No 02"; 
file_put_contents("archivoGravado.txt", $datos, FILE_APPEND) or die("ERROR: no se pudo grabar..."); echo "<br> Los datos fueron grabados OkOK"; 
//leer archivo grabado 
$cad=file_get_contents("archivoGravado.txt") or die("ERROR: no esta el archivo..."); 
echo "\n<br>Los nuvos datos leidos son: $cad" ;