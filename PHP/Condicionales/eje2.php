<!DOCTYPE html>
<html>
<!--Determina numero par o impar -->

<head>
    <title> Verifica Nro. par impar </title>

    <head>

    <body>
        <h2> Verifica si Nro es par o impar </h2>
        <?php
        // si formulario no se envio lo muestra
        if (!isset($_POST['submit']))
        {
    ?>
        <form method="post" action="eje2.php">
            Digite un numero: <br>
            <input type="text" name="num" size="3" />
            <p>
                <input type="submit" name="submit" value="Enviar" />
        </form>
        <?php
    // si se envio formulario procesar datos de entrada
        }   
        else
        {
            //obtener datos del contenedor
            $num=$_POST['num'];
            // preguntar si es par o impar
            if ($num % 2 == 0)
            {
                echo "El numero $num es par";
            }
            else
            {
                echo "El numero $num es impar";
            }
        }
    ?>
    </body>

</html>