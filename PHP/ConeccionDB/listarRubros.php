<!doctype html>
<html>

<head>
    <title>Listado</title>
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
    $registros = mysqli_query($con, "select codigo, descripcion from rubros") or die(mysqli_error($con));
    echo '<table class="tablalistado">';
    echo '<tr><th>Código</th><th>Descripción</th></tr>';
    while ($reg = mysqli_fetch_array($registros)) {
        echo '<tr>';
        echo '<td>';
        echo $reg['codigo'];
        echo '</td>';
        echo '<td>';
        echo $reg['descripcion'];
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
    mysqli_close($con);
    ?>
</body>

</html>