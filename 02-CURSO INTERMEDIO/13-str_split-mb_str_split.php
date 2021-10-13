<?php
// split - partir(dividir)
//chunk - pedazo
// str_split - permite crear un array de caracteres a partir de un string

$a = "Frase de prueba";
$b = str_split($a);
print_r($b);

// Array       
// (
//     [0] => F
//     [1] => r
//     [2] => a
//     [3] => s
//     [4] => e
//     [5] =>  
//     [6] => d
//     [7] => e
//     [8] =>
//     [9] => p
//     [10] => r
//     [11] => u
//     [12] => e
//     [13] => b
//     [14] => a
// )

// podemos definir un segundo argumento,opcional, para definir el numero de caracteres de cada valor del array creado.

$a = "Frase de prueba";
$b = str_split($a, 3);
print_r($b);

// Array
// (
//     [0] => Fra
//     [1] => se
//     [2] => de
//     [3] => pru
//     [4] => eba
// )

// IMPORTANTE: Tal como muchas funciones de php, hay que tener cuidado con string multibyte(con caracteres acentuados).
// En este caso podemos usar la funcion mb(multibyte) mb_str_split().
$a = "Es para probar está función";
$b = mb_str_split($a, 3);
print_r($b);

// Array
// (
//     [0] => Es 
//     [1] => par
//     [2] => a p
//     [3] => rob
//     [4] => ar
//     [5] => est
//     [6] => á f
//     [7] => unc
//     [8] => ión
// )