<?php
/*
* Operadores de comparación 
? Los operadores de comparación, como su nombre lo indica, permiten comparar dos valores. Puede también estar interesado en ver las tablas de comparación de tipos, ya que muestran ejemplos de las varias comparaciones relacionadas con tipos.

* Operadores de comparación
? Ejemplo	Nombre	Resultado
? $a == $b	Igual	true si $a es igual a $b después de la manipulación de tipos.
? $a === $b	Idéntico	true si $a es igual a $b, y son del mismo tipo.
? $a != $b	Diferente	true si $a no es igual a $b después de la manipulación de tipos.
? $a <> $b	Diferente	true si $a no es igual a $b después de la manipulación de tipos.
? $a !== $b	No idéntico	true si $a no es igual a $b, o si no son del mismo tipo.
? $a < $b	Menor que	true si $a es estrictamente menor que $b.
? $a > $b	Mayor que	true si $a es estrictamente mayor que $b.
? $a <= $b	Menor o igual que	true si $a es menor o igual que $b.
? $a >= $b	Mayor o igual que	true si $a es mayor o igual que $b.
? $a <=> $b	Nave espacial	Un integer menor que, igual a, o mayor que cero cuando $a es respectivamente menor que, igual a, o mayor que $b. Disponible a partir de PHP 7.
? $a ?? $b ?? $c	Fusión de null	El primer operando de izquierda a derecha que exista y no sea null. null si no hay valores definidos y no son null. Disponible a partir de PHP 7.
? Si se compara un número con un string o la comparación implica strings numéricos, entonces cada string es convertido en un número y la comparación realizada numéricamente. Estas reglas también se aplican a la sentencia switch. La conversión de tipo no tiene lugar cuando la comparación es === o !== ya que esto involucra comparar el tipo así como el valor.
*/

var_dump(0 == "a"); // 0 == 0 -> true
var_dump("1" == "01"); // 1 == 1 -> true
var_dump("10" == "1e1"); // 10 == 10 -> true
var_dump(100 == "1e2"); // 100 == 100 -> true

switch ("a") {
  case 0:
    echo "0";
    break;
  case "a": // nunca alcanzado debido a que "a" ya ha coincidido con 0
    echo "a";
    break;
}
