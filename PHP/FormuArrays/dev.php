<!DOCTYPE html>
<html>

<head>
    <title> dev </title>
</head>

<body>
    <h2> Bonificacion </h2> <br>
    <ul>
        <?php
            $name = $_POST["name"];
            $salario = $_POST["sala"];
            $boni;
            foreach ($_POST['dev'] as $cargo) {

                switch ($cargo) {
                    case 1:
                        $boni = (14 / 100) * $salario;
                        break;
                    case 2:
                        $boni = (12 / 100) * $salario;
                        break;
                    case 3:
                        $boni = (10 / 100) * $salario;
                        break;
                    case 4:
                        $boni = (8 / 100) * $salario;
                        break;
                    case 5:
                        $boni = (6 / 100) * $salario;
                        break;
                    case 6:
                        $boni = (4 / 100) * $salario;
                        break;
                    default:
                        $boni = (1 / 100) * $salario;
                        break;
                }
            }
            echo "Nombre: " . $name;
            echo "<br>Bonificacion: " . $boni;
            echo "<br>Salario final: " . $salario + $boni;
        ?>
    </ul>
</body>

</html>