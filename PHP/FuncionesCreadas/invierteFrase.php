<?php
function invierteFrase($frase)
{
    $palabras = explode(' ', $frase);
    foreach ($palabras as $k => $v) {
        $palabras[$k] = strrev($v);
    }
    return $palabras;
} 
//llamar funcion 
echo implode(' ', invierteFrase('Arequipa ciudad blanca del Peru')); 
