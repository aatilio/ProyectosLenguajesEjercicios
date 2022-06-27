<?php
// definir la clase 
/*Una clase puede ser un objeto en la vida real, que tiene funcionalidad 
o tambien puede ser algo abtracto que no se pude tocar, pero si tiene una funcion,
casos de uso, presentan sus propios atributos y metodos que pueden
ser eredados por otras clases*/

class Automovil
{
    // Propiedades 
    public $marca;
    public $color;
    public $velocidad = 50;
    // Metodos public 
    function acelerar()
    {
        echo "<br> Aumenta velocidad...";
    }
    public function freno()
    {
        echo "<br> Disminuye velocidad...";
    }
    public function direccion()
    {
        echo "<br> Dar vuelta...";
    }
}
//finde definicion de la clase 
//crear objeto 
$carro = new Automovil;
//operar con variable objeto
$carro->acelerar();
$carro->direccion();
$carro->freno();

$camion = new Automovil;
$camion-> acelerar();
$camion-> direccion();
$camion-> freno();
