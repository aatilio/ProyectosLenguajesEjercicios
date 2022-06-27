<?php
/**Una tercera forma de grabar archivos es usar variable puntero a archivo con fopen(), luego 
 * grabar con fwrite(). Además usar las función flock(variablePunteroArchivo, bloqueo) para 
 * bloquear un archivo antes de leerlo o grabarlo y ello para que ningún otro proceso tenga 
 * acceso al archivo evitando la corrupción de datos. El bloqueo puede ser: LOCK_EX o bloqueo 
 * exclusivo de escritura; LOCK_SH o bloqueo exclusivo de lectura; LOCK_UN destruye el 
 * bloqueo, como se muestra en el siguiente ejemplo. */

$datos = " Esta es una TERCERA prueba de grabar No 03 con bloque";
$fp = fopen("archivoGravado.txt", "w") or die("ERROR: no se puede abrir archivo...");
flock($fp, LOCK_EX) or die("ERROR: no se puede bloquear archivo...");
fwrite($fp, $datos) or die("ERROR: no se puede grabar datos...");
flock($fp, LOCK_UN) or die("ERROR: no se puede desbloquear archivo...");
fclose($fp);
echo "<br> Los datos fueron grabados en el archivo";
//leer archivo gravado

$cad = file_get_contents("archivoGravado.txt") or die("ERROR: no esta el archivo...");
echo "<br> Los nuvos datos leidos son: $cad";
