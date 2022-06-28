<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Instituto Hipólito Unanue</title>
</head>

<body>
    <?php
    //Función file() 
    //Esta función permite almacenar un texto en un vector. 
    //El almacenamiento se producirá línea por línea, es decir 
    //que cada elemento del vector contendrá una línea de texto 
    // Almacenamiento del Texto 
    $cadena = "En el universo 
    hay materia y energía, la materia 
    se halla en ciertos cuerpos llamados 
    cuerpos celestes. Algunos cuerpos son 
    fríos y no emiten energía, otros son 
    calientes y emiten luz y calor. 
    Desarrollo de Sistemas de Informacion";

    $f = fopen("texto3.txt", "w");
    fwrite($f, $cadena);
    fclose($f);
    // Generación del vector
    $nombre = "texto3.txt";
    $vector = file($nombre);
    $cantidad = count($vector);
    echo "<H3>";
    echo "Vector Generado:" . "<Br>";
    foreach ($vector as $clave => $valor) {
        echo $clave . " - " . $valor . "<br>";
    }
    ?>
</body>

</html>