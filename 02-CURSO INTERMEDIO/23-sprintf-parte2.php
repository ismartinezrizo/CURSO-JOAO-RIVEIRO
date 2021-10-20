<?php
$valor = 425.7;

// apesar de existir otras funciones para el efecto, podemos usar el formato para presentar valores monetarios.

echo "El valor total de la compra fue de $valor C$";
echo "\n";
echo sprintf("El valor total de la compra fue de %01.2f C$", $valor) . "\n";

// 0 %0 define valor de relleno.
// el siguiente numero define la cantidad de caracteres que se va a presentar
// .2f para dos casas decimales

// printf() imprime un texto o un numero
// sprintf() devuelve un valor que se tendra que ser almacenado

// echo sprintf("%'_20d", $valor) . "\n";
echo PHP_EOL;
echo "VALORES\n";
$valores = [23.35, 456.258, 7.1, 123];

foreach ($valores as $valor) {
  // con 30 puntos de rellenos y dos decimales
  echo sprintf("El precio es: %'.30.2f C$", $valor) . PHP_EOL;
}
