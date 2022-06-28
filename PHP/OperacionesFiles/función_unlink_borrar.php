<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Instituto Pedro P. Diaz</title>
</head>

<body>
    <?php
    //Función unlink() 
    //Esta función se utiliza para borrar un archivo. 
    //Recibe como parámetro el nombre del archivo a borrar.
    //Borrar el archivo Archi1.txt.
    $nombre = "Archi1.txt";
    if (file_exists($nombre)) {
        unlink($nombre);
        echo "El archivo $nombre se borró correctamente";
    } else {
        echo "No se encontró el archivo $nombre";
    }
    ?>
</body>

</html>