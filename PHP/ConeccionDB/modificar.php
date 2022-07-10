<!doctype html>
<html>

<head>
    <title>Modificación de rubro.</title>
</head>

<body>
    <?php
    $con = mysqli_connect("localhost", "root", "", "bodega") or die("Problemas con la conexión a la base de datos");
    $registro = mysqli_query($con, "select descripcion from rubros where codigo=$_REQUEST[codigo]") or
        die(mysqli_error($con));
    if ($reg = mysqli_fetch_array($registro)) {
    ?>
        <form method="post" action="modificarHelp.php">
            Descripción del rubro:
            <input type="text" name="descripcion" size="50" value="<?php echo $reg['descripcion']; ?>">
            <input type="hidden" name="codigo" value="<?php echo $_REQUEST['codigo']; ?>">
            <br>
            <input type="submit" value="Confirmar">
        </form>
    <?php
    } else
        echo 'No existe un rubro con dicho código';
    mysqli_close($con);
    ?>
</body>

</html>