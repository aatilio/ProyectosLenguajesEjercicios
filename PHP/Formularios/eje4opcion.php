<html>

<head>
    <meta charset="UTF-8">
    <title>I.E.S. Pedro P. Diaz</title>
</head>

<body>
    <form action="eje4Recibir.php" method="post">
        Digite primer valor:
        <input type="text" name="valor1">
        <br>
        Digite segundo valor:
        <input type="text" name="valor2">
        <br>
        <select name="operacion">
            <option value="Multiplicar">Multiplicar</option>
            <option value="Dividir">Dividir</option>
        </select>
        <br>
        <input type="submit" name="operar">
    </form>
</body>

</html>