<!doctype html>
<html>

<head>
    <title>Alta de artículo</title>
</head>

<body>
    <form method="post" action="ingresarProducHelp.php">
        Ingrese codigo del artículo:
        <input type="text" name="codigo" required>
        <br>
        Ingrese descripcion del artículo:
        <input type="text" name="descripcion" required>
        <br>
        Ingrese precio:
        <input type="text" name="precio" required>
        <br>
        Seleccione rubro:
        <select name="codigorubro">
            <?php
            $con = mysqli_connect("localhost", "root", "", "bodega") or die("Problemas con la conexión a la base de datos");
            $registros = mysqli_query($con, "select codigo,descripcion from rubros") or die(mysqli_error($con));
            while ($reg = mysqli_fetch_array($registros)) {
                echo "<option value=\"" . $reg['codigo'] . "\">" . $reg['descripcion'] . "</option>";
            }
            ?>
        </select>
        <br>
        <input type="submit" value="confirmar">
    </form>
</body>

</html>