<?php
//! Operadores para arrays
//? Ejemplo	Nombre	Resultado
//* $a + $b	Unión	Unión de $a y $b.
//* $a == $b	Igualdad	true si $a i $b tienen las mismas parejas clave/valor.
//* $a === $b	Identidad	true si $a y $b tienen las mismas parejas clave/valor en el mismo orden y de los mismos tipos.
//* $a != $b	Desigualdad	true si $a no es igual a $b.
//* $a <> $b	Desigualdad	true si $a no es igual a $b.
//* $a !== $b	No-identidad	true si $a no es idéntica a $b.

//? El operador + devuelve el array del lado derecho añadido al array del lado izquierdo; para las claves que existan en ambos arrays, serán utilizados los elementos del array de la izquierda y serán ignorados los elementos correspondientes del array de la derecha.

$array1 = ["a" => "Apple", "b" => "Banana"];
$array2 = ["c" => "Conejo", "d" => "Diente"];

$arrayCompleto = $array1 + $array2;
var_dump($array1);
var_dump($array2);
var_dump($arrayCompleto);
