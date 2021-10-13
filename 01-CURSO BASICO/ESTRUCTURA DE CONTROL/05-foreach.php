<?php
// foreach (expresión_array as $valor)
//     sentencias
// foreach (expresión_array as $clave => $valor)
//     sentencias

// $array = array(1, 2, 3, 4);
// foreach ($array as &$valor) {
//   $valor *= 2;
// }
// $array ahora es array(2, 4, 6, 8)
// var_dump($array);

// unset($valor); // rompe la referencia con el último elemento


$array = array(1, 2, 3, 4);
foreach ($array as $clave => $valor) {
  echo "{$clave} => {$valor} \n";
}

$a = array(1, 2, 3, 17);

foreach ($a as $v) {
  echo "Valor actual de \$a: $v.\n"; //escapamos el signo $
}
