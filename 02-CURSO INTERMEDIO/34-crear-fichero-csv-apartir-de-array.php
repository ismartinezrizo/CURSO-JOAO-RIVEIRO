<?php

// php permite guardar datos de un array en un fichero csv. para eso vamos a abrir y cerrar un fichero de forma usual, pero vamos a usar la funcion fputcsv para formatear nuestro array y escribir dentro del fichero.

$datos = [
  ['Juan', 'Programador', 47],
  ['Carlos', 'Abogado', 34],
  ['Martha', 'Profesora', 29],
  ['Carla', 'Peluquera', 30],
];


// abrimos el fichero. abre en forma de write
$fichero = fopen(dirname(__FILE__) . '/34-datos.csv', 'w');
// recorremos los datos linea a linea
foreach ($datos as $linea) {
  // escribimos en el fichero csv 
  fputcsv($fichero, $linea);
}
// cerramos el archivo
fclose($fichero);
