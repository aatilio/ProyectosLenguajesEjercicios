<?php
//leer archivo en una cadena 
$cadena = file_get_contents("ejemplo1.txt") or die("ERROR: No existe archivo...");
echo $cadena;
