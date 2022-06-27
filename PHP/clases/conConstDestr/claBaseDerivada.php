<?php
//definicion de clase base
class MiClase1
{
    //definicion de propiedades
    public $publico = "Visibilidad y uso publico";
    protected $protegido = "Visibilidad y uso protegido";
    private $privado = "Visibilidad y uso privado";
    //metodos
    public function imprimir()
    {
        echo "<br> Acceso publico" . $this->publico;
        echo "<br> Acceso protegido" . $this->protegido;
        echo "<br> Acceso privado" . $this->privado;
    }
}
//definicion de clase derivada
class MiClase2 extends MiClase1
{
    //propiedades
    protected $protegido = "Acceso protegido 2";
    //metodos
    public function imprimir()
    {
        echo "<br> Acceso publico" . $this->publico;
        echo "<br> Acceso protegido" . $this->protegido;
        echo "<br> Acceso privado" . $this->privado;
    }
}
//operar con las clases MiClase-1 creando objetos
echo "<br> Creando objetos de MiClase1 <br>";
$obj1 = new MiClase1();
$obj1->imprimir();
//echo "<br> ..." . $obj1->publico;
//echo "<br> ..." . $obj1->protegido;
//echo "<br> ..." . $obj1->privado;
//operar con las clases MiClase-2 creando objetos
echo "<br> Creando objetos de MiClase2 <br>";
$obj2 = new MiClase2();
$obj2->imprimir();
//echo "<br> ..." . $obj2->publico;
//echo "<br> ..." . $obj2->protegido;
//echo "<br> ..." . $obj2->privado;