<?php
// substr()
// la funcion substr(substring) es usada con mucha frecuencia para capturar una parte de un string, sea para crear una nueva variable o simplemente para representar una parte de un string. 

$a = "Mi nombre es Isaac Martínez Rizo";
echo $a . "\n";
// se ubica en la posicion 19 y desde alli cuenta hasta 9
$b = substr($a, 19, 8); //$b = 'Frase es p'
echo $b . "\n";
// siempre se cuenta el acento por eso debemos usar mb_substr y no substr a secas.
echo mb_substr($a, 19, 8) . "\n";

$otraFrase = "Esta es una frase";
echo mb_substr($otraFrase, 0) . "\n"; //desde inicio hasta el final
echo mb_substr($otraFrase, 0, 10) . "\n"; //desde inicio contar diez
echo mb_substr($otraFrase, 5) . "\n"; //desde el 5 hasta el final
echo mb_substr($otraFrase, 5, 2) . "\n"; //desde el 5 contar 2
echo mb_substr($otraFrase, -3) . "\n"; //cuenta los ultimos 3 caracteres
echo mb_substr($otraFrase, -5) . "\n"; //cuenta los ultimos 5 caracteres

$string2 = "abcdefghijklmnop";
echo substr($string2, 8, -3) . "\n"; //ijklm
