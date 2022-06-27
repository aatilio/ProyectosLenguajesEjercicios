<?php
/**clase MAQUINA */
class Maquina
{
    //propiedades
    private $nombre;
    //metodo constructor y destructor
    function _construct()
    {
        echo "<br> Encendido...";
        $this->nombre = " ";
    }
    function _destruct()
    {
        echo "<br> Apagado...";
    }
    //metodos publicos
    public function ingreso($dato)
    {
        $this->nombre = $dato;
    }
    public function listar()
    {
        echo "<br> Propiedades del objeto <br>";
        echo $this->nombre;
    }
}
// fin de la definicion de la clase
//operativizando la clase
$ma = new Maquina();
$ma->listar();
$ma->ingreso("Soriam");
$ma->listar();
//destruir objeto
unset($ma);
