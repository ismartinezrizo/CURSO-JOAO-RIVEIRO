<?php
// STRIPOS - Y STRRIPOS
// Con las funciones strpos y strrpos  vamos a buscar la posicion de un needle dentro de un haystack. En el caso de esas funciones, ellas son case-sensitive(Son sinsives a minuscula y mayuscula).

// Si pretendemos hace una misma busqueda, pero por case insensitive, usamos las funciones stripos y strripos


$a = "Este cuarto Tiene luz";
$pos = strpos($a, 'T'); //12
echo $pos . "\n";

// insensible a mayúsculas y minúsculas en un string
$pos = stripos($a, 'T'); //2
echo $pos . "\n";

// strrpos() -  Encuentra la posición de la última aparición de un substring en un string
$a = "Este Cuarto Tiene luz bien osCura";
$pos = strrpos($a, 'cu'); //29
echo $pos . "\n";

// strripos() - Encuentra la posición de la última aparición de un substring insensible a mayúsculas y minúsculas en un string
$a = "Este Cuarto Tiene luz bien osCura";
$pos = strripos($a, 'cu'); //29
echo $pos . "\n";
