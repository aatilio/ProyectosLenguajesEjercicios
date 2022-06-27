<?php
// definir la clase 
class Automovil
{
    // Propiedades 
    public $marca;
    public
        $color;
    public $velocidad = 50;
    // Metodos 
    public function acelerar()
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
    public function listarPropiedades()
    {
        echo "<br> Listado Valores de propiedaes del Objeto...";
        echo "<br> Auto de marca: " . $this->marca;
        echo "<br> Auto de color: " . $this->color;
        echo "<br> Auto con velocidad de: " . $this->velocidad;
    }
} //finde definicion de la clase 
//crear objeto 
$carro = new Automovil;
//operar con variable objeto y sus propiedades 
$carro->marca = "Toyota";
$carro->color = "Rojo";
$carro->acelerar();
$carro->direccion();
$carro->freno();
$carro->listarPropiedades();
