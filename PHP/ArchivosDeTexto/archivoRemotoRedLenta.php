<?php
//leer archivo remoto en red lenta 
$cadena = '';
$fp = fopen("http://www.google.com", "r") or die("ERROR: No no no existe archivo...");
while (!feof($fp)) {
    $cadena .= fgets($fp, 512);
}
fclose($fp);
echo $cadena;
