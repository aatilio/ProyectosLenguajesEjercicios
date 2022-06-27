<?php
/**Crear un programa que 
 * defina y operar la clase Vehículo */ 
class vehiculo
{
    // Propiedades 
    public $marca;
    public $color;
    public $velocidad = 50;
    // Metodos public 
    function acelerar()
    {
        echo "<br> EL vihiculo esta aumentando la velocidad...";
    }
    public function freno()
    {
        //$this->$velocidad -= 30;
        echo "<br> EL vihiculo esta disminuyendo la velocidad...";
    }
    public function direccion()
    {
        echo "<br> Dar vuelta...";
    }
}
//finde definicion de la clase 
//crear objeto 
$coche = new vehiculo;
//operar con variable objeto
$coche->acelerar();
$coche->direccion();
$coche->freno();
