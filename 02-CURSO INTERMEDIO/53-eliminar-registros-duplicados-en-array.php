<?php 

// array - elimina registros duplicados

// vamos a imaginar que nos enviaron un fichero que contiene nombres que necesitamos cargalo en un array. Queremos, con todo, eliminar nombres duplicados

$nombres = ['juan','ana','maria','carlos','juan','maria','sara','maria','ana','antonio'];

print_r($nombres);


//array_unique - Toma un array y devuelve un nuevo array sin valores duplicados
$nombres_sin_duplicados = array_unique($nombres);

print_r($nombres_sin_duplicados);

$numeros = ["100","+100","1000","0200","200"];

// SORT_NUMERIC - compara ítems numéricamente
$numeros_sin_repetir = array_unique($numeros,SORT_NUMERIC);
print_r($numeros_sin_repetir);

