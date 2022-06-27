<?php
//definicion de clase base A
class A
{
    function A()
    {
        echo "<br> Soy el constructor de la clase A";
    }
    function ejemplo()
    {
        echo "<br> Funcion original de clase A";
    }
}
//definicion de clase derivada
class B extends A
{
    function ejemplo()
    {
        echo "<br> Funcion redefinda en clase B";
        A::ejemplo();
        parent::ejemplo();
    }
}
//operativizando y usando las clases
$bb = new B;
$bb->ejemplo();
