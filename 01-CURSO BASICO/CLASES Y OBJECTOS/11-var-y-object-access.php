<?php
# VAR KEYWORD
// TIENE EL MISMO COMPARTAMIENTO DE PUBLIC, PERO APENAS EXISTE POR RETROCOMPATIBILIDAD DEBIDO AL CODIGO ESCRITO ANTES DEL PHP 5, NO ES RECOMENDADO USARLO PORQUE PRONTO DEJARA DE SER UTILIZADO.

// class Hombre
// {
//   var $nombre, $apellido;
// }

// $yo = new Hombre();
// echo $yo->nombre = "Isaac ";
// echo $yo->apellido = "Martinez \n";

# OBJECT ACCESS
// EN PHP UN ELEMENTO INSTANCIADO A PARTIR DE UNA CLASE PUEDE ACEDER A ELEMENTOS PRIVADOS Y PROTEGIDOS DE OTRO OBJETO CREADO A PARTIR DE LA MISMA CLASE.
// ESTE COMPARTAMIENTO NO SUCEDE EN LA MAYORIA DE LOS LENGUAJES DE PROGRAMACION

class Humano
{
  private $nombre = 'x';

  function setPrivate($objecto, $valor)
  {
    // es como asignarle la variable nombre a objeto y darle como valor el valor
    $objecto->nombre = $valor;
  }

  function presentar()
  {
    echo $this->nombre;
  }
}

$a = new Humano();
$b = new Humano();
$a->setPrivate($b, 'Isaac');

echo "Objeto A: ";
$a->presentar();
echo "\n";

echo "Objeto B: ";
$b->presentar();
