<?php
// VAR_EXPORT
// PRESENTA INFORMACION SOBRE UNA VARIABLE EN UN ESTILO QUE PUEDE SER USADO COMO CODIGO PHP

$nombre = "Isaac";
var_export($nombre);
echo "\n";

$valores = [1, 2, 3];
var_export($valores);
echo "\n";

$numeros = [];
// agregar 10 numeros a el array numeros
for ($i = 0; $i < 10; $i++) {
  $numeros[] = rand(0, 100);
}

var_export($numeros);
