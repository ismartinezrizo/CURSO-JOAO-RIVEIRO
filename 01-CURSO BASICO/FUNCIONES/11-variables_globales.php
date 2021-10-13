<?php

// $variable = 10;

// echo "$variable \n";


// function funcion($a, $b)
// {
// echo "<p>$variable</p>"; //No es conocida adentro de esta funcion
//   echo "$a e $b \n";
// }

// llamada a la funcion
// funcion(50, 30);


// function funcion_2()
// {
//   $v = 100;
// }

// funcion_2();
// echo "$v \n";

// Escopo es un ciclo de vida de una variable
// Global

// En este ejemplo la variable $a existe en dos copos diferentes
// $a = 100;
// function otra_funcion()
// {
//   global $a;
//   $a = 20;
// }

// otra_funcion();
// echo $a;

// $b = 100;

// function otra_funcion_2()
// {
//   $GLOBALS['b'] = 150;
// }

// otra_funcion_2();
// echo $b;

// EN LOS BUCLES LAS VARIABLES PUEDEN SER ACCESADAS DESDE AFUERA DEL ESCOPO ESTO ES EN PHP
for ($i = 1; $i <= 5; $i++) {
  echo "$i \n";
  $x = 100;
}

echo $x;
