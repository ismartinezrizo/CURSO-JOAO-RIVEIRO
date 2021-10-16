<?php
// NUMBER FORMAT
// presenta un numero formateado de varias formas

// IMPORTANTE: Existe en php la funcion money_format(), pero fue descontinuada.
// a partir de la version php 7.4. No debe ser usada en nuevos proyectos

// $num - El número al que dar formato.
// $decimals - Establece el número de puntos decimales.
// $dec_point - Establece el separador para los decimales.
// $thousand_sep - Establece el separador para los millares.

$valor = 100;
echo number_format($valor, 0, null, null) . "\n"; //presenta el valor por defecto 100

echo number_format($valor, 2, ',', null) . "\n";

echo number_format($valor, 2, ',', '.') . "\n";

echo number_format($valor, 2, '.', ',') . "\n";

$valor = 100.45;
echo number_format($valor, 3, ',', null) . "\n"; //100,450

echo number_format($valor, 1, ',', null) . "\n"; //100,4

$valor = 123456.789;
echo number_format($valor, 2, ',', '.') . "\n"; //123.456,79

$valor = 125.2;

echo number_format($valor, 2, ',', null) . ' C$' . "\n"; //125,20 C$ 
echo 'C$ ' . number_format($valor, 2, ',', null) . "\n"; //C$ 125,20
