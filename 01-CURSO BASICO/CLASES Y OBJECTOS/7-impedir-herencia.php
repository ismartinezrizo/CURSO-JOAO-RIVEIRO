<?php
// FINAL
// PARA IMPEDIR QUE UNA CLASE DERIVADA PUEDA HACER OVERRIDE DE METODOS PODEMOS
// UTILIZAR LA EXPRESION FINAL DE LA SIGUIENTE MANERA

// class Vehiculo
// {
// con final no va poder hacer un override
//   final function mover()
//   {
//   }
// }

// class Bisicleta extends Vehiculo
// {
//   function mover()
//   {
//     // OVERRIDE DEL CODIGO ORIGINAL
//   }
// }

// PODEMOS, INCLUSIVE, DEFINIR UNA CLASE COMO QUE NO PUEDA SER HEREDADA COLOCANDO FINAL ANTES DE CLASS


final class Humano
{
  function test()
  {
    echo "Test";
  }
}

class Hombre extends Humano
{
}

$hombre = new Hombre();
$hombre->test();
