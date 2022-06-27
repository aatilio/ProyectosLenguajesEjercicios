<?php
// definir la clase 
class Automovil
{
    // Propiedades 
    public $marca;
    public $color;
    public $velocidad = 60;
    // Metodos 
    public function acelerar()
    {
        $this->velocidad += 20;
        echo "<br> Aumenta velocidad...";
    }
    public function freno()
    {
        $this->velocidad -= 40;
        echo "<br> Disminuye velocidad...";
    }
    public function direccion()
    {
        $this->acelerar();
        echo "<br> Dar vuelta...";
        $this->freno();
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
$carro->marca = "Hyundai";
$carro->color = "Blanco";
$carro->acelerar();
$carro->direccion();
$carro->freno();
$carro->listarPropiedades();
