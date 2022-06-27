<?php 
//leer archivo remoto 
$matriz = file("https://google.com") or die("ERROR: No no existe archivo..."); 
foreach($matriz as $linea) { 
    echo $linea . "<br>"; 
    } echo "OKok...";
    ?>