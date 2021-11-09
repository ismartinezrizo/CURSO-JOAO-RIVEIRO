<?php
// Podemos cargar todos los datos de un fichero de texto para un array directamente usando la funcion file()

// file — Transfiere un fichero completo a un array
// dirname(__FILE__) camino completo
$paises = file(dirname(__FILE__) . "/33-paises.txt");
print_r($paises);


// IGNORA LOS ESPACIOS EN LOS ARCHIVOS
$paises2 = file(dirname(__FILE__) . "/33-paises.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
print_r($paises2);


// file_get_contents — Transmite un fichero completo a una cadena
// $paises2 = file_get_contents(dirname(__FILE__) . "/33-paises.txt");
// print_r($paises2);
