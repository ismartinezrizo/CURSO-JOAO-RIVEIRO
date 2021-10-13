<?php
// VERIFICAR EL TIPO DE VARIABLE

// PHP CONTIENE MUCHOS FUNCIONES PARA VERIFICAR QUE TIPOS DE VARIABLES ESTAN GUARDADOS DENTRO DE UNA VARIABLE

$nombre = "Mi nombre";
$edad = 31;
$despierto = true;

if (is_array($nombre)) {
  echo "Es un array"; //no va a parecer nada
}

if (is_bool($despierto)) {
  echo "Es un booleano \n"; //mostrara el mensaje
}

if (is_int($edad)) {
  echo "Es un INT \n";
}

echo is_string($edad) ? "SI es un string" : "NO es un numero";

// documentacion = https://www.php.net/manual/es/function.is-array
// is_​array
// is_​bool
// is_​callable
// is_​countable
// is_​double
// is_​float
// is_​int
// is_​integer
// is_​iterable
// is_​long
// is_​null
// is_​numeric
// is_​object
// is_​real
