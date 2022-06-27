<?php
//definir la funcion al inicio del programa
function mcd($a, $b)
{
    if ($b == 0) {
        return $a;
    } else {
        return mcd($b, $a % $b);
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title> Maximo comun divisor </title>
</head>

<body>
    <h2> Obtener maximo comundivisor de dos numeros </h2>
    <?php
    // si formulario no se envio lo muestra
    if (!isset($_POST['btnEnvia'])) {
    ?>
        <form method="post" action="3maximoComunDivisor.php">
            Digite dos numeros:<br>
            <input type="text" name="n1" size="3" />
            <p>
                <input type="text" name="n2" size="3" />
            <p>
                <input type="submit" name="btnEnvia" value="Enviar" />
        </form>
    <?php
        // si formulario ya se envio procesa datos
    } else {
        $num1 = (int) $_POST['n1'];
        $num2 = (int) $_POST['n2'];
        // invoca, llama y usa la funcion maximo comun divisor
        echo "Los numeros ingresados son: $num1, $num2";
        echo "<br> El maximo comun divisor es:" . mcd($num1, $num2);
    }
    ?>
</body>

</html>