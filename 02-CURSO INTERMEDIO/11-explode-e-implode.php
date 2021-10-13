<?php
// La utilizacion de array como coleccion de datos es algo practicamente presente en todas las aplicaciones de php. Existen funciones de string tambien relacionados con arrays, estas dos son un ejemplo de esto.

// EXPLODE
// permite transformar un string en un array de strings, recorriendo a un caracter de separacion

$str_nombres = "Isaac,Abraham,Ana,Maria,Jesus";
$nombres = explode(',', $str_nombres);
var_export($nombres);

// separa en dos el string
$nombres = explode(',', $str_nombres, 2);
var_export($nombres);

echo "\n";
// IMPLODE — Une elementos de un array en un string(Convierte un array en un string)
$nombres = ['juan', 'pedro', 'maria', 'ana', 'antonio'];
$str_nombres = implode('|', $nombres);
var_export($str_nombres);
echo "\n";

// usa el espacio de separacion(podemos usar join es un alias de implode)
$str_nombres = implode(' ', $nombres);
// convierte un array en un string
$str_nombres = join('-', $nombres);
var_export($str_nombres);
