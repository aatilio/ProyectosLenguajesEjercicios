<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // prueba si cadena esta vacia
    $cadena = '';
    echo (bool) empty($cadena);
    echo "<br/>";
    $cadena = null;
    echo (bool) empty($cadena);
    echo "<br/>";
    $cadena = '0';
    echo (bool) empty($cadena);
    // retorna longitutd de cadena
    $cadena = "Bienvenidos a Arequipa Peru";
    echo "<br> Longitud de cadena   " . strlen($cadena);
    // invierte cadena
    echo "<br> Cadena invertida:    " . strrev($cadena);
    //repetir cadena
    $cad = "PHP";
    echo "<br> Repite cadena:   " . str_repeat($cad, 5);
    // Extrae subcadena
    echo "<br> Extrae subcadena:    " . substr($cadena, 13, 6);
    // Comparar cadenas
    $a = "PHP";
    $b = "PHP";
    $c = "php";
    echo "<br> Compara a con b: " . strcmp($a, $b);
    echo "<br> Compara a con c: " . strcmp($a, $c);
    // Retorna numero de palabras 
    echo "<br>Nro de palabras:  " . str_word_count($cadena);
    echo "<br>Nro de palabras:  " . str_word_count($cadena);
    // Remplazar caracteres en cadena 
    echo str_replace('a', 'AY', $cadena);
    // Eliminar espacios en blanco en inicio y fin de cadena 
    $cad = " Lenguaje PHP ";
    echo "<br> $cad";
    echo "<br>" . trim($cad);
    // Cambiar a mayusculas 
    echo "<br> En mayusculas:   " . strtoupper($cadena);
    // Cambiar a minusculas 
    echo "<br> En minusculas:   " . strtolower($cadena);
    // Cambiar a mayuscula el primer caracter 
    echo "<br> cambia primer char amay: " . ucfirst($cadena);
    // Cambiar a mayuscula primeros char 
    echo "<br> cambia primeros char amay:   " . ucwords($cadena);
    ?>
</body>

</html>