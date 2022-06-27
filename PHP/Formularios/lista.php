<!DOCTYPE html>
<html>

<head>
    <title> Formulario carros </title>
</head>

<body>
    <h2> Seleccione marca de auto </h2>
    <form method="post" action="carros.php">
        Tipo: <br>
        <select name="tipo">
            <option value="Toyota"> Toyota Celica </option>
            <option value="Ford"> Ford Start </option>
            <option value="Hyundai"> Hyundai Tucson </option>
        </select>
        Color: <br>
        <input type="text" name="txtColor" />
        <input type="submit" />
    </form>
</body>

</html>