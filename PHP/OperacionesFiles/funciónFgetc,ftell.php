<html>

<head>
    <meta charset="utf-8">
    <title>Instituto Pedro P. Diaz</title>
</head>

<body>
    <?php
    //Función ftell() 
    //Permite obtener la posición de donde está el puntero en el archivo. 
    //Recibe como parámetro la variable fichero y devuelve el valor numérico 
    //de la posición en que está el puntero. 
    //Leer un archivo y mostrar la posiciones de cada uno de 
    //los caracteres que lo constituyen.
    $nombre = "texto1.txt";
    $f = @fopen($nombre, "r") or die("Error al abrir el archivo: $nombre");
    echo "<H3>";
    echo "Archivo: ";
    echo fgets($f);
    echo "<Br>";
    rewind($f);
    while (!feof($f)) {
        echo " Posición (" . ftell($f) . ") : ";
        echo fgetc($f);
        echo "<Br>";
    }
    fclose($f);
    ?>
</body>

</html>