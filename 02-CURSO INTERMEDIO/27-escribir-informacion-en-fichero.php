<?php

// FILESYSTEM
// El proceso mas linar para la grabacion de texos en un fichero es el siguiente.
# 1-creamos una variable, tambien conocida como handle, que es un apuntador para un fichero.
# 2- Escribimos texto usando funciones con ese apuntador.
# 3- Cerramos el fichero.

// echo dirname(__FILE__); # C:\laragon\www\curso-php-8\CURSO-JOAO-RIVEIRO\02-CURSO INTERMEDIO

// $fichero = fopen(dirname(__FILE__) . '/datos1.txt', 'w');
// fwrite($fichero, 'Primera frase');
// fwrite($fichero, 'Segunda frase');
// fwrite($fichero, 'Agregando otra frase');
// fclose($fichero);

// en la intruccion fopen(), el segundo parametro(modo) puede ser definido de varias formas.
// las mas comunes son las siguientes

// w - write - abre el fichero, si el fichero existe elimina todo y vuelve a agregar

// a - append - apenas para escribir, si el fichero no existe crea, si existe, agrega el texto que ya existe en el fichero. no reemplaza

$fichero_append = fopen(dirname(__FILE__) . '\fichero.txt', 'a');
fwrite($fichero_append, 'Esta es una frase');
fwrite($fichero_append, 'Esta es otra frase');
fwrite($fichero_append, 'una frase mas...');
fclose($fichero_append);
