<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Instituto Pedro P. Diaz</title>
</head>

<body>
    <?php
    //esta funcion hace que una o varias palabras puedan ser inprimidas 10 veces
    function mostrar($texto)
    {
        for ($x = 0; $x < 10; $x++) {
            echo " $texto <br>";
        }
        echo "<hr>";
    }
    mostrar("Instituto");
    mostrar("Pedrp P. Diaz");
    mostrar("Desarrollo de Sistemas de Informacion");
    ?>
</body>

</html>