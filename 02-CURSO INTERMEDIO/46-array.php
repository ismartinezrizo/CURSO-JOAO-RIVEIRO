<?php

use function PHPSTORM_META\type;

$nombres = array('a', 'b', 'c');
$nombres2 = ['a', 'b', 'c'];
$nombres3[] = 'Isaac';
$nombres3[] = 'Abraham';
$nombres3[] = 'Martinez';

print_r($nombres);
print_r($nombres2);
print_r($nombres3);


// en otro lenguaje se llama diccionario
$cliente = [
  "nombre" => "isaac",
  "edad" => 31,
  "profesion" => "Ingeniero"
];

print_r($cliente);

$cliente2["nombre"] = "Juan";
$cliente2["edad"] = 37;
$cliente2["pais"] = "Nicaragua";
print_r($cliente2);
