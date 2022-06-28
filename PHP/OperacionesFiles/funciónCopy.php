<html>

<head>
    <title>Instituto Pedro P. Diaz</title>
</head>

<body>
    <?php
    //Función copy() 
    //Esta función permite realizar una copia de un 
    //archivo determinado. Necesita dos parámetros, que son: 
    //el nombre del archivo origen y el nombre del archivo 
    //destino. Si la copia se realiza con éxito devuelve 
    //verdadero, de lo contrario devuelve falso. 
    //Realizar una copia del archivo texto1.txt 
    //en el archivo texto2.txt
    $origen = "texto1.txt";
    $f = @fopen($origen, "r") or die("Error al abrir el archivo: $origen");
    echo "<H3>";
    echo "Archivo: ";
    echo fgets($f);
    echo "<Br>";
    fclose($f);
    $destino = "texto2.txt";
    if (copy($origen, $destino)) {
        echo "La copia se realizó con éxito";
    } else {
        echo "No se pudo realizar la copia";
    }
    ?>
</body>

</html>