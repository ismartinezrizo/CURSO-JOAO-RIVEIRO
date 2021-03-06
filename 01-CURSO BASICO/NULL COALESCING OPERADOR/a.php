<?php
// NULL COALESCING OPERADOR
// CON PHP 7 FUE INTRODUCIDO EL OPERADOR DE COALESCENCIA DE NULOS, COALESCENCIA SIGNIFICA ALGLUTINACION DE CONJUCION DE ITEMS SEPARADOS.

// BASICAMENTE ESTE OPERADOR ES UN ATAJO PARA ALGUNOS CASOS DEL OPERADOR CONDICIONAL TERNARIO.
// VEAMOS EL EJEMPLO


$x = null;
// ?? PARA PREGUNTAR SI ALGO ES NULL
$nombre = $x ?? "Sin nombre";

// ESTE EJEMPLO ES SEMEJANTE A:
$nombre1 = isset($x) ? $x : "Sin nombre";
// o de esta otra manera
$nombre1 = $x ?: "Sin nombre";

// POR TANTO, SI X ES NULL, ENTONCES ES ATRUBUIDO EL VALOR DEFINIDO AL FRENTE DE LOS DOS SIGNOS DE INTERROGACION

$apellido = null;
// $apellido = "Martinez";
// ??= SI APELLIDO ESTA DEFINIDO COMO NULL ENTONCES AGREGA APELLIDO DESCONOCIDO
$apellido ??= "Apellido desconocido";
// EN ESTE CASO APELLIDO = APELLIDO DESCONOCIDO

echo $nombre;
echo "\n";
echo $nombre1;
echo "\n";
echo $apellido;
