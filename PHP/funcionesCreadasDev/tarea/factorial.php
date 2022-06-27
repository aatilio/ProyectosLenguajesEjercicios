<?php
/**Crear un programa que implemente la función que retorne el 
 * factorial($n), de un numero ingresado en una caja de texto 
 * de un formulario web */
function FactorialdeN($numero)
{
    if ($numero == 1)
        return 1;
    else
        return $numero * FactorialdeN($numero - 1);
}
?>
<!DOCTYPE html>
<html>

<head>
    <title> Factorial de un numero </title>
</head>

<body>
    <h2> Factorial de un numero </h2>
    <?php
    // si formulario no se envio lo muestra
    if (!isset($_POST['btnEnvia'])) {
    ?>
        <form method="post" action="factorial.php">
            Ingrese el numero:<br>
            <input type="text" name="n1" size="3" />
            <p>
                <input type="submit" name="btnEnvia" value="Calcular" />
        </form>
    <?php
        // si formulario ya se envio procesa datos
    } else {
        $num1 = (int) $_POST['n1'];
        echo "El factorial de " . $num1 . " es " . FactorialdeN($num1);
        // invoca, llama y usa la funcion maximo comun divisor

    }
    ?>
</body>

</html>