<?php
// TYPES CONVERSIONS
// SABEMOS QUE PHP BUSCA AUTOMATICAMENTE HACER UNA CONVERCION DE DATOS ENTRE DIFERENTES TIPOS, ES UNA BUENA PRACTICA EXPLICAR ESO EN EL CODIGO

$mi_booleano = true;
echo $mi_booleano . "\n"; //resulta en un string vacio
echo (int)$mi_booleano;

// DESIGNAMOS ESTA OPERACION COMO CONVERSACION EXPLICITA(EXPLICIT CAST)
// PODEMOS HACER COVERCION DE TIPO DE VALORES:
// (string), (int),(float), (array), etc.

// VEAMOS EL CASO DE CONVERCION DE UN ARRAY A UN OBJETO

$nombres = [
  'Isaac',
  'Jose',
  'Maria',
  'Ana'
];

$nombres = (object) $nombres;
echo "<pre>";
print_r($nombres);

// POR EJEMPLO PODEMOS CONVERTIR UNA VARIABLE EN UN ARRAY CON UN UNICO VALOR
$nombre = "Vicenta";
$array_nombre = (array)$nombre;
print_r($array_nombre);
