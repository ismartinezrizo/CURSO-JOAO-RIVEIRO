<?php
// str_replace
// Tal como el nombre lo dice, permite hacer sustitucion de string dentro de un string. En este caso, sustituye todas las ocurrencias de un string que exista dentro de otro string.

use function PHPSTORM_META\type;

$a = "Este texto sirve para probar el sistema";
echo str_replace('te', 'TE', $a) . "\n";
//EsTE TExto sirve para probar el sisTEma
echo str_replace(' ', '--->', $a) . "\n";

//Existe un cuarto parametro, opcional que permite definir cuantas sustituciones van a ser hechas. Cuando es ignorado, son hechas todas las sustituciones.

$vocales = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
var_export($vocales);
$b = str_replace($vocales, "-", $a);
echo $b . "\n";
// st txt srv pr prbr l sstm

$string = "Esta comida esta muy buena";
$original = ["comida", "buena"];
$nuevo = ["almuerzo", "mal"];
echo $string . "\n";
// comida y nuevo sera reemplazado por almuerzo y mal en el string
$nuevo_string = str_replace($original, $nuevo, $string);
echo $nuevo_string . "\n";

//& Nota:

// Esta función es sensible a mayúsculas y minúsculas. Utilice Use str_ireplace() para reemplazos insensibles a mayúsculas y minúsculas.
