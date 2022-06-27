<?php

/*
*Teniendo en cuenta el siguiente diagrama de jerarquía de clases, implementar la clase base y las 
 * clases derivadas y darles operatividad a las clases derivadas. */
class figura
{
    protected $nombre;

    function _construct()
    {
        $this->nombre = " ";
    }
    public function ingresoNombre($n)
    {
        $this->nombre = $n;
    }

    public function retonName()
    {
        return $this->nombre;
    }
}

class circulo extends figura
{
    private $radio;

    function _construct()
    {
        $this->radio = 0;
    }
    //metodos publicos
    public function ingreso($radio)
    {
        $this->radio = $radio;
    }
    public function area()
    {
        $area = pi() * ($this->radio) * ($this->radio);
        return $area;
    }
    public function perimetro()
    {
        $perimetro = pi() * ($this->radio) * 2; //($this->base) + ($this->altura);
        return $perimetro;
    }
    public function mostrar()
    {
        echo "<br>Nombre de la operacion " . figura::retonName();
        echo "<br>la radio es: " . $this->radio;
        echo "<br>EL area de la circunferencia es: " . $this->area();
        echo "<br>EL perimetro de la circunferencia es: " . $this->perimetro();
    }
}
class cuadrado extends figura
{
    private $lado;

    function _construct()
    {
        $this->lado = 0;
    }
    //metodos publicos
    public function ingreso($lado)
    {
        $this->lado = $lado;
    }
    public function area()
    {
        $area = ($this->lado) * ($this->lado);
        return $area;
    }
    public function perimetro()
    {
        $perimetro = ($this->lado) * 4;
        return $perimetro;
    }
    public function mostrar()
    {
        echo "<br><br>Nombre de la operacion " . figura::retonName();
        echo "<br>Lado del cuadrado es: " . $this->lado;
        echo "<br>EL area del cuadrado es: " . $this->area();
        echo "<br>EL perimetro del cuadrado es: " . $this->perimetro();
    }
}
class triangulo extends figura
{
    private $base;
    private $altura;

    function _construct()
    {
        $this->base = 0;
        $this->altura = 0;
    }

    //metodos publicos
    public function ingreso($b, $a)
    {
        $this->base = $b;
        $this->altura = $a;
    }

    public function area()
    {
        $area = ($this->base) * ($this->altura) / 2;
        return $area;
    }
    public function perimetro()
    {
        $perimetro = ($this->base) * ($this->altura) / 2;
        return $perimetro;
    }
    public function mostrar()
    {
        echo "<br><br>Nombre de la operacion " . figura::retonName();
        echo "<br>base es: " . $this->base;
        echo "<br>altura es: " . $this->altura;
        echo "<br>EL area del triangulo es: " . $this->area();
        echo "<br>EL perimetro del triangulo es: " . $this->perimetro();
    }
}

$are = new circulo();
$are->ingresoNombre("Circulo Rojo");
$are->ingreso(5);
$are->mostrar();

$are1 = new cuadrado();
$are1->ingresoNombre("Cuadrado Verde");
$are1->ingreso(10);
$are1->mostrar();

$are2 = new triangulo();
$are2->ingresoNombre("Triangulo Azul");
$are2->ingreso(5, 8);
$are2->mostrar();