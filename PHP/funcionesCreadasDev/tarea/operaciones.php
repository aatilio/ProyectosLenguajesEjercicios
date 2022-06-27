<?php
/**
 * Crear un programa que implemente las funciones suma($a,$b), resta($a,$b), 
 * producto($a,$b), division($a,$b) que retorne el resultado de la operación 
 * que indica su nombre de función, de dos números ingresados en cajas de texto 
 * de un formulario web
 */
function s($a, $b)
{
    return $a + $b;
}
function r($a, $b)
{
    return $a - $b;
}
function p($a, $b)
{
    return $a * $b;
}
function d($a, $b)
{
    return $a / $b;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title> Operaciones </title>
</head>

<body>
    <h2> Diferentes operaciones </h2>
    <?php
    // si formulario no se envio lo muestra
    if (!isset($_POST['btnEnvia'])) {
    ?>
        <form method="post" action="operaciones.php">
            Digite dos numeros:<br>
            <input type="text" name="n1" size="3" />
            <p>
                <input type="text" name="n2" size="3" />
            <p>
                <label for="">Escoja una operacion</label>
                <select name="opc">
                    <option value="1">suma</option>
                    <option value="2">respta</option>
                    <option value="3">producto</option>
                    <option value="4">divicion</option>
                </select>
                <input type="submit" name="btnEnvia" value="Enviar" />
        </form>
    <?php
        // si formulario ya se envio procesa datos
    } else {
        $opc = (int) $_POST['opc'];
        $n1 = (int) $_POST['n1'];
        $n2 = (int) $_POST['n2'];

        switch ($opc) {
            case 1:
                echo "La suma de los numeros " . $n1 . " y " . $n2 . " es " . s($n1, $n2);
                break;
            case 2:
                echo "La resta de los numeros " . $n1 . " y " . $n2 . " es " . r($n1, $n2);
                break;
            case 3:
                echo "El prodcto de los numeros " . $n1 . " y " . $n2 . " es " . p($n1, $n2);
                break;
            case 4:
                echo "La divicion de los numeros " . $n1 . " y " . $n2 . " es " . d($n1, $n2);
                break;

            default:
                # code...
                break;
        }
    }
    ?>
</body>

</html>