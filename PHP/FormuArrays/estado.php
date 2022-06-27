<!DOCTYPE html>
<html>

<head>
    <title> Selector de Estado Civil </title>
</head>

<body>
    <h2> Resultado Selector de Estado Civil </h2> Usted seleciono las siguientes: <br>
    <ul> <?php foreach ($_POST['estado'] as $es) {
                echo "<li> $es </li> <br>";
            } ?> </ul>
</body>

</html>