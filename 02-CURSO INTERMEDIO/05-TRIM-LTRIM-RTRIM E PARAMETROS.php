<?php
// trim = Elimina espacios y otros caracteres del inicio y del final de un string

$a = " Esto es un string";

// ------------------------
$a = trim($a); //Esto es un string
echo $a . "\n";

// -------------------------
$b = trim($a);
echo $b . "\n";

// --------------------------
echo trim($a) . "\n";

// --------------------------
// ltrim() = Elimina espacio del inicio del string
$string = "   Hola soy un string";
echo $string . "\n";
echo ltrim($string) . "\n";

// --------------------------
$string2 = "Hola soy un string           ";
echo rtrim($string2) . "\n";

// -------------------------------------------------
// podemos usar el segundo parametro de esta funcion
$a = "abcdef";
echo trim($a, "a") . "\n"; //bcdef
echo trim($a, "af") . "\n"; //bcdef
echo trim($a, 'abef') . "\n"; //cd

// por ejemplo, apesar de existir otras formas, podemos limpiar el $_POST
$usuario = trim($_POST['usuario']);

// No lo usen en las contrasenha. ellas pueden contener un espacio en su contrasenha