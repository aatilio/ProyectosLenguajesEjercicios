<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Instituto Pedro P. Diaz</title>
</head>

<body>
    <?php
    //Función rename() 
    //Permite cambiar el nombre a un archivo. Acepta dos 
    //parámetros, el primero es el nombre actual del archivo 
    //y el segundo es el nombre nuevo que se le quiere dar. 
    //Cambiar el nombre del archivo texto1.txt por Archi1.txt.
    $nombreActual = "texto1.txt";
    $nombreNuevo = "Archi1.txt";
    if (file_exists($nombreActual)) {
        rename($nombreActual, $nombreNuevo);
        echo "El nombre del archivo se cambió correctamente";
    } else {
        echo "No se encontro el archivo $nombreActual";
    }
    ?>
</body>

</html>