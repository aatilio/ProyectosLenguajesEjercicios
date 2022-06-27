<!DOCTYPE html>
<html>

<head>
    <title> Selector de Pizzas... </title>
</head>

<body>
    <h2> Resultado Selector de Pizzas </h2> Usted seleciono las siguientes: <br>
    <ul>
        <?php
        foreach ($_POST['favorita'] as $fa) {
            echo "<li> $fa </li> <br>";
        }
        ?>
    </ul>
</body>

</html>