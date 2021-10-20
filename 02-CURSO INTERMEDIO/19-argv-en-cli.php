<?php
// Dentro del script.php podemos captar los argumentos usando el array $argv.
// (Podemos designar por argument values).

// se trata de un array en el cual el indice 0 guarda siempre el nombre del script.

// php script.php //$argv[0] = script.php

//php script.php 100 // $argv[0] = script.php
//$argv[1] = 100 

// [script.php]
// si tuviera definida
$vueltas = isset($argv[1]) ? $argv[1] : 10;
// vueltas sera 10 o el valor de $argv[1]

for ($i = 0; $i <= $vueltas; $i++) {
  echo $i . PHP_EOL;
}

// si ejecutamos:
// - vamos a presentar los valores de 0 a 10 en la terminal

// php  script.php 100
// - vamos a presentar los valores de 0 a 100 en la terminal