<?php 
//leer archivo en una matriz 
$matriz = file("eje2.txt") or die("ERROR: No no existe archivo..."); 
foreach($matriz as $linea) { 
    echo $linea . "<br>"; 
} echo "OK..."; 
?>