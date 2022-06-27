<!DOCTYPE html>
<html>

<head>
    <title> Factorial de numero </title>
</head>

<body>
    <h2> Calcula factorial de Numero </h2>
    <?php
    // si formulario no se envio lo muestra
    if (!isset($_POST['btnEnvia'])) {
    ?>
        <form method="post" action="factorial.php">
            Digite un Numero: <br>
            <input type="text" name="num" size="3" />
            <p>
                <input type="submit" name="btnEnvia" value="Enviar" />
            <?php
            // si formulario se envio procesar datos de entrada 
        } else {
            // obtener datos de entrada del contenedor $_POST 
            $num = $_POST['num'];
            // verificar que Nro es positivo 
            if ($num <= 0) {
                echo "Error solo positivos...";
                exit();
            }
            // calculo del factorial 
            $fact = 1;
            for ($f = $num; $f >= 1; $f--) {
                $fact *= $f;
            }
            echo " <br> El factorial de $num es $fact";
        }
            ?>
</body>

</html>