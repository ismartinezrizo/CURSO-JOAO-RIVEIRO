<?php
// $argv tiene valores de los parametros
// $argc guarda la cantidad de parametros

//echo $argc; //php argc.php // 1 
//php argc.php 100 //2



// vamos, por ejemplo, crear un script que guarda un fichero valores numericos aleatorios.

// > Nuestro script va a aceptar por defecto la creacion de un fichero con 10 valores.

// > Si pasamos el parametro va a escribir ese numero de valores en el nuevo fichero.

// > Si pasamos un segundo parametro, vamos a definir el intervalo de valores a sorter, caso contrario, sera sorteado entre 0 y 100.

$veces = 10;
$min = 0;
$max = 100;

// Verfica los argumentos
if ($argc == 2) {
  // significa que le pasamos un parametro
  $veces = $argv[1];
} else if ($argc == 4) {
  $veces = $argv[1];
  $min = $argv[2];
  $max = $argv[3];
}


$file = fopen(time() . '.txt', 'w');
for ($i = 0; $i < $veces; $i++) {
  fwrite($file, rand($min, $max) . PHP_EOL);
}

fclose($file);
