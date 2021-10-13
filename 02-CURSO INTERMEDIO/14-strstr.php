<?php
// STRSTR - Retorna el resto de un string a partir de una ocurrencia

$a = "Frase de test en el sistema";
echo strstr($a, "si") . "\n"; //sistema

// esta funcion es case-sensitive
// para usar la misma funcion en modo case-insensitive, usamos stristr()

// Existe un tercer parametro que permite definir la parte de un string.
// que pretendemos obtener. Por defecto, no usando ese parametro, el string obtenido es el resto del string incluido en needle.
// Si usamos $before_needle = true, vamos a obtener la parte inicial del string esta el needle, excluyendo a needle

echo strstr($a, "n", true); //Frase de test e
