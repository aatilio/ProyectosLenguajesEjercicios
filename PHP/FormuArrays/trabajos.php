<!DOCTYPE html>
<html>

<head>
    <title> Selector de Cargo Empresa </title>
</head>

<body>
    <h2> Resultado Selector de Trabajo </h2> Usted seleciono lo siguientes: <br>
    <ul> <?php foreach ($_POST['puestos'] as $pu) {
                echo "<li> $pu </li> <br>";
            } ?> </ul>
</body>

</html>