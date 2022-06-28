<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Instituto Pedro P. Diaz</title>
</head>

<body>
    <?php
    /**
     * El lenguaje de programación de PHP nos ofrece la ventaja de poder utilizar funciones para el manejo de archivos como las siguientes:
     */
    $cadena = "Desarrollo de Sistemas de Informacion";
    $fp = fopen("texto1.txt", "w");
    fwrite($fp, $cadena);
    fclose($fp);
    echo "el archivo se creo correctamente";
    ?>
</body>

</html>