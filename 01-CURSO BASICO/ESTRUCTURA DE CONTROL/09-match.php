<?php
// La expresión match ramifica la evaluación basada en una comprobación de identidad de un valor. De forma similar a una sentencia switch, una expresión match tiene una expresión de sujeto que se compara con múltiples alternativas. A diferencia de switch, se evaluará a un valor muy parecido al de las expresiones ternarias. A diferencia de switch, la comparación es una comprobación de identidad (===) en lugar de una comprobación de igualdad débil (==). Las expresiones match están disponibles a partir de PHP 8.0.0.

// $dia = 4;

// switch ($dia) {
//   case 1:
//     echo "Lunes";
//     break;
//   case 2:
//     echo "Martes";
//     break;
//   case 3:
//     echo "Miercoles";
//     break;
//   case 4:
//     echo "Jueves";
//     break;
//   case 5:
//     echo "Viernes";
//     break;
//   case 6:
//     echo "Sabado";
//     break;
//   case 7:
//     echo "Domingo";
//     break;
//   default:
//     echo "No existe";
//     break;
// }

$dia = 1;
$resultado = match ($dia) {
  1 => "Lunes",
  2 => "Martes",
  3 => "Miercoles",
  4 => "Jueves",
  5 => "Viernes",
  6 => "Sabado",
  7 => "Domingo",
  default => "No existe ese dia"
};

echo $resultado;
