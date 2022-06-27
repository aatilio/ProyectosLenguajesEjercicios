<DOCTYPE html>
    <html>

    <head>
        <title> Genera tabla </title>
    </head>

    <body>
        <?php
        //crea tabla de 3 por 4
        echo "<table border=\"1\">";
        for ($fila = 1; $fila < 4; $fila++) {
            for ($col = 1; $col < 5; $col++) {
                echo "<td> Fila $fila , Columna $col </td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </body>

    </html>