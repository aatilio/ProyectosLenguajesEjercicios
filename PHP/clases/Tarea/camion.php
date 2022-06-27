<?php
/**Crear un programa que defina y operare la clase Camión */
class Camion
{
    // Propiedades 
    public $marca;
    public $color;
    public $capacidad;
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
        echo "<br> Ir de un punto a otro";
        $this->freno();
    }
    public function listarPropiedades()
    {
        echo "<br> Listado Valores de propiedaes del Objeto...";
        echo "<br> marca del camion: " . $this->marca;
        echo "<br> color de camion: " . $this->color;
        echo "<br> Capacidad del camion: " . $this->capacidad;
        echo "<br> velocidad del camion: " . $this->velocidad;
    }
} //finde definicion de la clase 
//crear objeto 
$volvo = new Camion;
//operar con variable objeto y sus propiedades 
$volvo->marca = "Volvo";
$volvo->color = "Rojo";
$volvo->capacidad = 100;
$volvo->acelerar();
$volvo->direccion();
$volvo->freno();
$volvo->listarPropiedades();
