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

//use subcontratato as GlobalSubcontratato;

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
class subcontratato extends empleado
{
    protected $salarioHora;
    protected $horasTrabajadas;

    function _construct()
    {
        $this->salarioHora = 0;
        $this->horasTrabajadas = 0;
    }
    //metodos publicos
    public function ingresoSueldoHora($sh, $nh)
    {
        $this->salarioHora = $sh;
        $this->horasTrabajadas = $nh;
    }
    /*public function retonHo()
    {
        return $this->salarioHora;
    }
    public function retonSueHo()
    {
        return $this->horasTrabajadas;
    }*/
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
class vendedor extends subcontratato
{
    private $comicionVentasExterior;
    private $totalVentasExterior;

    function _construct()
    {
        $this->comicionVentasExterior = 0;
        $this->totalVentasExterior = 0;
    }
    //metodos publicos
    public function ingresoSueldoPorcentaje($cve, $tve)
    {
        $this->comicionVentasExterior = $cve;
        $this->totalVentasExterior = $tve;
    }
    public function sueldo()
    {
        $sueldo = $this->salarioHora * $this->horasTrabajadas  + ($this->comicionVentasExterior / 100) * $this->totalVentasExterior;
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

    $encargado = new encargado();
    $encargado->ingresoNombre("juam rodrigues");
    $encargado->ingresoSalario(1890);
    $encargado->mostrarDatos();

    $subcontratado = new subcontratato();
    $subcontratado->ingresoNombre("fernando gonsales");
    $subcontratado->ingresoSueldoHora(150, 14);
    $subcontratado->mostrarDatos();

    $vendedor = new vendedor();
    $vendedor->ingresoNombre("graviela costa");
    $vendedor->ingresoSueldoHora(168, 15);
    $vendedor->ingresoSueldoPorcentaje(3, 500);
    $vendedor->mostrarDatos();
