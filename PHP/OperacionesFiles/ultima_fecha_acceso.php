<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Instituto Hipólito Unanue</title>
</head>

<body>
    <?php
    /*
     * Aplicación de programa que nos determine la última fecha de acceso 
     * y modificación de un archivo a través dos nuevas funciones
     */
    //fileatime() y filemtime() 
    //La función fileatime() devuelve la última fecha 
    //de acceso a un archivo determinado y la función 
    //filemtime(), devuelve la última fecha de modificación 
    //de un archivo. Ambas reciben como parámetro el 
    //nombre del archivo. 
    //Mostrar las últimas fechas de acceso y de 
    //modificación del archivo texto2.txt.
    $nombre = "texto2.txt";
    echo "<H3>";
    if (file_exists($nombre)) {
        echo "Archivo: $nombre";
        echo "<Br><Br>";
        echo "Última fecha de acceso: ";
        echo "<br> " . fileatime($nombre) . "<br>";
        echo date("d/m/Y", fileatime($nombre));
        echo "<Br><Br>";
        echo "Última fecha de modificación: ";
        echo date("d/m/Y h:i:s", filemtime($nombre));
    } else {
        echo "No se encontro el archivo $nombre";
    }
    ?>
</body>

</html>