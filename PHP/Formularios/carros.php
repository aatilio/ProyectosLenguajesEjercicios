<!DOCTYPE html>
<html>

<head>
    <title> Usando Formulario carros </title>
</head>

<body>
    <h2> Obteniendo datos del Formulario </h2>
    <?php //obtener datos de entrada del array contenedor 
        $tipo=$_POST["tipo"]; 
        $color=$_POST["txtColor"]; 
        echo "<br> Tu" .$tipo. "_".$color. "esta Ok"; 
    ?>
</body>

</html>