<html>

<head>
    <meta charset="utf-8">
    <title>Instituto pedro P. Diaz</title>
</head>

<body>
    <?php
    /**
     * Aplicación cálculo de tamaño de archivo
     */
    //Función filesize() 
    //Esta función devuelve el tamaño del archivo que se le 
    //pasa como parámetro. El valor devuelto es en cantidad 
    //de caracteres. 
    //Determinar la cantidad de caracteres que contiene el 
    //archivo llamado texto3.txt.
    $nombre = "texto3.txt";
    echo "<H3>";
    if (file_exists($nombre)) {
        echo "Tamaño del archivo $nombre: ";
        echo filesize($nombre);
    } else {
        echo "No se encontro el archivo $nombre";
    }
    ?>
</body>

</html>