<?php

// function cuadrado(int $numero)
// {
//   return $numero * $numero;
// }

// echo cuadrado(4);
// echo "\n";
// echo cuadrado(5);

// function suma(int $numero1, int $numero2): float
// {
//   return $numero1 + $numero2;
// }

// var_dump(suma(1, 2));


// Ejemplo #5 El modo estricto en acción
declare(strict_types=1);

function suma($a, $b): int
{
  return $a + $b;
}

var_dump(suma(1, 3));
var_dump(suma(1.6, 3));
