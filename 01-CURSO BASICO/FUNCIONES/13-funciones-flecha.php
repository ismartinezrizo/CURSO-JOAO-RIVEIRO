<?php

// $x = 20;
// $y = 30;
#con use es como decirle usa las variables declaradas arriba pero no va a poder ser modificadas
// $miClosure = function ($z) use ($x, $y) {
//   echo "$z - $x - $y \n";
//   $y += 100; #esta instruccion no va a modificar el valor de y
// };

// $miClosure(10);
// echo "Valor de Y $y \n";

#---------------------------------------------------------------
# FUNCIONES ARROW FUNCTION
#---------------------------------------------------------------
# Las funciones de flecha fueron introducidas en PHP 7.4 como una sintaxis más concisa para las funciones anónimas.
# Tanto las funciones anónimas como las funciones de flecha se implementan utilizando la clase Closure.
# Las funciones de las flechas tienen la forma básica fn (argument_list) => expr.
# Las funciones de las flechas soportan las mismas características que las funciones anónimas, excepto que el uso de variables del ámbito padre siempre es automático.
# Cuando una variable utilizada en la expresión se define en el ámbito padre será implícitamente capturada por valor.

$x = 10;
$y = 20;

$miFuncion = fn ($z) => "$x - $y - $z \n";
echo $miFuncion(5);

$sumar = fn ($n1, $n2) => $n1 + $n2 . "\n";
echo $sumar(20, 10);

# usan la palabra reserva fn no necesitan de return ni de las llaves