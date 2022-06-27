<?php

/*
El diagrama de jerarquía muestra que el departamento de ventas tiene tres tipos de empleados en 
la temporada de verano:

Subcontratado: cobra por horas y trabaja en atención de clientes en el mostrador del local

Vendedor: cobra por horas y trabaja en atención de clientes en el mostrador del local y además 
cobra una comisión de las ventas que realiza fuera del local

Encargado: cobra un sueldo mensual ya que es el único estable todo el año

Aplique sus capacidades de abstracción para completar la implementación de las clases y subclases, 
así como la implementación del software a desarrollar. 
*/
class empleado
{
    protected $nombre;
    protected $sueldo;
    //contructores
    /*function _constructNom()
    {
        $this->nombre = " ";
    }
    function _constructFun()
    {
        $this->funciones = " ";
    }*/
    //asignacion de datos
    public function ingresoNombre($n = " ")
    {
        $this->nombre = $n;
    }
    public function ingresoSalario($s = 0)
    {
        $this->sueldo = $s;
    }
    //retorno de datos
    public function retonNom()
    {
        return $this->nombre;
    }
    public function retonSue()
    {
        return $this->sueldo;
    }
}

class encargado extends empleado
{
    /*private $salario;

    function _construct()
    {
        $this->salario = 0;
    }
    //metodos publicos
    public function ingresoSalario($s)
    {
        $this->salario = $s;
    }*/
    public function mostrarDatos()
    {
        echo "<b>Encargado</b>";
        echo "<br>Nombre del encargado: " . empleado::retonNom();
        echo "<br>Salario mensual del encargado es: " . empleado::retonSue();
        echo "<br>La funcion del encargado es: administrar el negoio";
    }
}
class vendedor extends empleado
{
    private $salarioHora;
    private $horasTrabajadas;
    private $comicionVentasExterior;
    private $totalVentasExterior;

    function _construct()
    {
        $this->salarioHora = 0;
        $this->horasTrabajadas = 0;
        $this->comicionVentasExterior = 0;
        $this->totalVentasExterior = 0;
    }
    //metodos publicos
    public function ingresoSueldoPago($sh, $nh, $cve, $tve)
    {
        $this->salarioHora = $sh;
        $this->horasTrabajadas = $nh;
        $this->comicionVentasExterior = $cve;
        $this->totalVentasExterior = $tve;
    }

    public function sueldo()
    {
        $sueldo = ($this->horasTrabajadas * $this->salarioHora) + ($this->comicionVentasExterior / 100) * $this->totalVentasExterior;
        return $sueldo;
    }

    public function mostrarDatos()
    {
        echo "<br><br><b>Vendedor</b>";
        echo "<br>Nombre del vendedor: " . empleado::retonNom();
        echo "<br>Salario mensual del vendedor es: " . $this->sueldo();
        echo "<br>La funcion del vendedor es: trabaja en atención de clientes en el mostrador del local y además cobra una comisión de las ventas que realiza fuera del local";
    }
}

class subcontratato extends empleado
{
    private $salarioHora;
    private $horasTrabajadas;

    function _construct()
    {
        $this->salarioHora = 0;
        $this->horasTrabajadas = 0;
    }
    //metodos publicos
    public function ingresoSueldoPago($sh, $nh)
    {
        $this->salarioHora = $sh;
        $this->horasTrabajadas = $nh;
    }
    public function sueldo()
    {
        $sueldo = $this->horasTrabajadas * $this->salarioHora;
        return $sueldo;
    }

    public function mostrarDatos()
    {
        echo "<br><br><b>Subcontratador</b>";
        echo "<br>Nombre del subcontratato: " . empleado::retonNom();
        echo "<br>Salario mensual del subcontratato es: " . $this->sueldo();
        echo "<br>La funcion del subcontratato es: trabaja en atención de clientes en el mostrador del local";
    }
}

function encargado()
{
    $name = $_GET['nameee'];
    $sueldo = $_GET['salarioee'];

    $encargado = new encargado();
    $encargado->ingresoNombre($name);
    $encargado->ingresoSalario($sueldo);
    $encargado->mostrarDatos();
}
function vendedor()
{
    $name1 = $_POST['namevv'];
    $horasT = $_POST['ht'];
    $sueldoH = $_POST['shvv'];
    $porcentaje = $_POST['comici'];
    $totalA = $_POST['totalvendidoafuera'];

    $vendedor = new vendedor();
    $vendedor->ingresoNombre($name1);
    $vendedor->ingresoSueldoPago($horasT, $sueldoH, $porcentaje, $totalA);
    $vendedor->mostrarDatos();
}
function subcontratado()
{
    $name2 = $_POST['namess'];
    $horasT = $_POST['nhss'];
    $sueldoH = $_POST['shss'];

    $subcontratado = new subcontratato();
    $subcontratado->ingresoNombre($name2);
    $subcontratado->ingresoSueldoPago($horasT, $sueldoH);
    $subcontratado->mostrarDatos();
}


$opc = $_POST['tipos'];

switch ($opc) {
    case '1':
        if (!isset($_POST['pro'])) {
        ?>
            <!DOCTYPE html>
            <html lang="es">

            <head>
                <meta charset="UTF-8">
                <title>Formulario</title>
            </head>

            <body>
                <form action="procesar.php" method="$_GET">
                    <hl>Formulario de sueldo de encargado</hl><br><br>
                    <label for="">Ingrese el nombre del trabajador: </label>
                    <input type="text" name="nameee"><br>
                    <label for="">Ingrese el salario mensual: </label>
                    <input type="number" name="salarioee"><br>
                    <input type="submit" name="pro" value="Procesar">
                </form>
            </body>

            </html>
        <?php
        } else {
            encargado();
        }
        break;
    case '2':
        ?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <title>Formulario</title>
        </head>

        <body>
            <form action="procesarusd.php" method="post">
                <hl>Formulario de sueldo de vendedor</hl><br><br>
                <label for="">Ingrese el nombre del trabajador: </label>
                <input type="text" name="name"><br>
                <label for="">Ingrese el numero de horas trabajadas: </label>
                <input type="number" name="ht"><br>
                <label for="">Ingrese el salario por hora: </label>
                <input type="number" name="shvv"><br>
                <label for="">Ingrese el % de comicion por ventas fuera: </label>
                <input type="number" name="comici"><br>
                <label for="">Ingrese total vendido afuera: </label>
                <input type="number" name="totalvendidoafuera"><br>
                <input type="submit" value="Procesar">
            </form>
        </body>

        </html>
    <?php
        vendedor();
        break;
    case '3':
    ?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <title>Formulario</title>
        </head>

        <body>
            <form action="procesarpen.php" method="post">
                <hl>Formulario de sueldo de subcontratados</hl><br><br>
                <label for="">Ingrese el nombre del trabajador: </label>
                <input type="text" name="namess"><br>
                <label for="">Ingrese el numero de horas trabajadas: </label>
                <input type="number" name="nhss"><br>
                <label for="">Ingrese el salario por hora: </label>
                <input type="number" name="shss"><br>
                <input type="submit" value="Procesar">
            </form>
        </body>

        </html>
<?php
        subcontratado();
        break;
    default:
        # code...
        break;
}
