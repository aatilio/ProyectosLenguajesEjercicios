<!doctype html>
<html>

<head>
    <title>Listado de artículos</title>
    <style>
        .tablalistado {
            border-collapse: collapse;
            box-shadow: 0px 0px 8px #000;
            margin: 20px;
        }

        .tablalistado th {
            border: 1px solid #000;
            padding: 5px;
            background-color: #ffd040;
        }

        .tablalistado td {
            border: 1px solid #000;
            padding: 5px;
            background-color: #ffdd73;
        }
    </style>
</head>

<body>
    <?php
    $con = mysqli_connect("localhost", "root", "", "bodega") or die("Problemas con la conexión a la base de datos");
    $registros = mysqli_query($con, "select ar.codigo as codigoart,
ar.descripcion as descripcionart, ar.precio, ru.descripcion as descripcionrub from productos as ar
inner join rubros as ru on ru.codigo=ar.codigorubro") or die(mysqli_error($con));
    echo '<table class="tablalistado">';
    echo '<tr><th>Código</th><th>Descripción</th><th>Precio</th><th>Rubro</th></tr>';
    while ($reg = mysqli_fetch_array($registros)) {
        echo '<tr>';
        echo '<td>';
        echo $reg['codigoart'];
        echo '</td>';
        echo '<td>';
        echo $reg['descripcionart'];
        echo '</td>';
        echo '<td>';
        echo $reg['precio'];
        echo '</td>';
        echo '<td>';
        echo $reg['descripcionrub'];
        echo '</td>';
        echo '</tr>';
    }
    echo '<table>';
    mysqli_close($con);
    ?>
</body>

</html>