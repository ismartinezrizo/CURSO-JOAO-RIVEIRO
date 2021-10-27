<?php

// a = append - respeta lo que tiene y agrega al final del archivo
$fichero = fopen(dirname(__FILE__) . '/fichero.txt', 'a');
for ($i = 1; $i <= 10; $i++) {
  fwrite($fichero, 'Esta linea contiene el valor ' . rand(0, 100) . PHP_EOL);
}
fwrite($fichero, 'Otro valor agregado' . PHP_EOL);
fwrite($fichero, 'Otro valor agregado' . PHP_EOL);
fwrite($fichero, 'Otro valor agregado' . PHP_EOL);
fwrite($fichero, 'Otro valor agregado' . PHP_EOL);
fclose($fichero);
