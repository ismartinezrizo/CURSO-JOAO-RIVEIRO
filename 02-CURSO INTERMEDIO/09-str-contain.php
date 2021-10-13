<?php
// En las reglas de negocios de nuestro codigo vamos a necesitar usar funciones que permitan verificar cual es el contenido de un string.
// Se contiene otro string, si comienza por la letra x, termina con y o cuantas 'A'

// PHP ofrece varias funciones para esta finalidad

$a = "Esta frase es usada para test";
// str_contains - verifica si un string retorna true o false

$b = "es";
// si dentro de la variable a existe lo que hay en b
if (str_contains($a, $b)) {
  echo "SI"; ///<<<
} else {
  echo "NO";
}
echo "\n";

// ----------------------
$c = "PARA";
// si dentro de la variable a existe lo que hay en b
if (str_contains($a, $c)) {
  echo "SI"; ///<<<
} else {
  echo "NO";
}
echo "\n";

// ----------------------
$c = "frases"; //NO, porque lo que existe es frase
// si dentro de la variable a existe lo que hay en b
if (str_contains($a, $c)) {
  echo "SI"; ///<<<
} else {
  echo "NO";
}
echo "\n";

// para saber si comienza con un determinado string
$string = "Este es una prueba";
if (str_starts_with($string, 'Es')) {
  echo "SI";
} else {
  echo "NO";
}
echo "\n";
//-------------------------------
// termina con
$string = "Este es una prueba";
if (str_ends_with($string, 'b')) {
  echo "SI";
} else {
  echo "NO"; //No, porque termina con a
}
