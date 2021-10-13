<?php
// STRPOS - Busca la ultima ocurrencia de un string dentro de otros

// La Haystack es un string donde vamos a buscar la posicion
// La Needle es un string cuya posicion pretendemos obtener dentro de un string
// Offet es un parametro opcional que permite definir a partir de donde es afectuada la busqueda

$a = "Esta frase sirve para prueba";
$pos = strpos($a, 'se'); //esta en la posicion 8
echo $pos . "\n";

$a = "Esta frase sirve para prueba";
$pos = strpos($a, 'Esta'); //esta en la posicion 0
echo $pos . "\n";

$a = "Esta frase sirve para prueba";
$pos = strpos($a, 'sta'); //esta en la posicion 1
echo $pos . "\n";


$a = "Esta frase sirve para prueba";
$pos = strpos($a, 'isaac'); // vacio porque no existe
echo $pos . "\n";

// puede devolver 0 cuando no existe
$a = "Esta frase sirve para prueba";
$pos = strpos($a, 'isaac'); // vacio porque no existe
echo (int)$pos . "\n";
