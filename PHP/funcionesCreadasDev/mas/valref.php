<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Instituto Pedro P. Diaz</title>
</head>

<body>
    <?php
    //cuando la variable se pasa por valor, el resultado solo cambia si le llamas a la funcion
    function PorValor($a)
    {
        $a = $a + 1;
    }
    //cuando llamamos a un valor por referencia, el resulatado tambien cambia para esa variable en todo el codigo
    function PorReferencia(&$a)
    {
        $a = $a + 3;
    }
    $p = 10;
    PorValor($p);
    echo $p . "<br>";
    echo "<hr>";
    $p = 10;
    PorReferencia($p);
    echo $p . "<br>";
    ?>
</body>

</html>