<?php
/**Crear un programa que defina y operativise la clase Circulo, la cual tiene como propiedad $radio; asi mismo 
 * tiene los métodos: Circulo() método constructor que le asignara 00 a la propiedad $radio; el método ingreso() 
 * que le asignara un valor diferente de cero a la propiedad $radio; la función área() que retornara el área del 
 * circulo; la función mostrar() que imprime el valor del radio y el área de un objeto de la clase Circulo. 
 * Operativise y use la clase Circulo por lo menos creando y operando un objeto. */
class circulo{
    private $radio;
    //private $pi = pi();
    //private $color;

    function _construct()
    {
        $this->radio = 0;
    }
    function _destruct($x)
    {
        unset($x);
    }

    //metodos publicos
    public function ingreso($radio)
    {
        $this->radio = $radio;
    }
    public function area(){
        $area = pi() * ($this->radio) * ($this->radio);
        return $area;
    }
    public function mostrar()
    {
        echo "<br>la radio es: ". $this->radio;
        echo "<br>EL area de la circunferencia es: ". $this->area();
    }

}
$are = new circulo();
$are->ingreso(5);
$are->mostrar();
