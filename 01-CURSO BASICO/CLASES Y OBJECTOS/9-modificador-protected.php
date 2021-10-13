<?php

//& PROTECTED

//^ UN ELEMENTO PROTECTED PUEDE SER ALCANZADO DENTRO DE UNA CLASE Y DENTRO DE CUALQUIER CLASE QUE SEA HEREDADA


class ClaseTest
{
  public $publica = 'a';
  protected $protegida = 'b';
  private $privada = 'c';
}

class ClaseDerivada extends ClaseTest
{
  function test()
  {
    echo $this->publica; //^ POSIBLE
    echo $this->protegida; //^ POSIBLE
    echo $this->privada; //! ERROR
  }
}

$a = new ClaseTest();
$a->publica = '1'; //^ POSIBLE
$a->protegida = '2'; //! ERROR, NO ES POSIBLE SER MODIFICADA
$a->privada = '3'; //! ERROR,  NO ES POSIBLE SER MODIFICADA


$b = new ClaseDerivada();
$b->publica = 'a'; //^ POSIBLE
$b->protegida = 'b'; //! ERROR,  NO ES POSIBLE SER MODIFICADA
$b->privada = 'c'; //! ERROR,  NO ES POSIBLE SER MODIFICADA

$b->test(); //^ MUESTRA EL VALOR DE PROTECTED.
