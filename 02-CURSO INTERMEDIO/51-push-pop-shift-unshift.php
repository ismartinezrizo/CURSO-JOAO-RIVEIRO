<?php 
// PUSH, POP, SHIFT E UNSHIFT

// array_push — Inserta uno o más elementos al final de un array

$nombres = ['isaac','juan','pedro','maria'];

array_push($nombres, 'dania');
array_push($nombres, 'elito','katerine','aaron','diana');

print_r($nombres);

// array_unshift() - Añadir al inicio de un array uno a más elementos
array_unshift($nombres, 'Jesus');
array_unshift($nombres, 'santos','carlos','andres');
print_r($nombres);

// array_shift() - Quita un elemento del principio del array
array_shift($nombres);
print_r($nombres);


// array_pop() - Extrae el último elemento del final del array
array_pop($nombres);
print_r($nombres);