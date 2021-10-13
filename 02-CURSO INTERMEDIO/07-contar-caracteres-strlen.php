<?php
// COMO CONTAR EL NUMERO DE CARACTERES DE UN STRING

// muchas veces vamos a necesitar calcular el numero de caracteres de un string
// con mucha frecuencia recorremos rapidamente a el uso de la funcion strlen

$a = "Una frase para probar";
echo strlen($a);

// -------------------
// cuando una variable es nula o vacia
$b = null;
$c = "";

echo strlen($b) . "\n"; //no es posible
echo strlen($c) . "\n"; //0

// -----------------------------
// cuando una variable es boleana
$si = true;
$no = false;

echo strlen($si) . "\n"; //1
echo strlen($no) . "\n"; //0

// -----------------------------
// cuando una variable es numerica
$numero = 1234;
echo strlen($numero) . "\n";

// -----------------------------
// cuando una variable es un array
$nombres = ['ana', 'carlos', 'isaac'];
//echo strlen($nombres); //Genera un error. No puede ser usado con array porque espera un string

// -----------------------------------
// problema caracteres con acentos
$dato = "Isaac Martínez"; //presenta un valor de mas porque la i esta acentuada
echo strlen($dato) . "\n";

// para contar los nombres acentuados usamos el mb_strlen
echo mb_strlen($dato) . "\n";
