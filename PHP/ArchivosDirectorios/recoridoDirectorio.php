<?php
/**
 * Otro procedimiento de recorrer directorio es usar la función opendir() que retorna un 
 * puntero de directorio al directorio mencionado en la invocación de la función. Así mismo 
 * usa la función readdir() con una variable puntero a directorio, para iterar sobre el 
 * directorio es decir recorrerlo, retornando una sola entidad o archivo cada vez que es 
 * invocado. También será necesario usar la función closedir() para cerrar el apuntador 
 * de directorio.
 */
//crear apuntador de directorio 
$dp = opendir('.') or die("ERROR: no se puede abrir directorio...");
//leer contenido de directorio 
while ($archivo = readdir($dp)) {
    if ($archivo != '.' && $archivo != '..') {
        echo "$archivo <br>";
    }
}
//cierra directorio 
closedir($dp);
