<?php 
// LIST Y EXTRACT - TRANSFORMAR UN ARRAY EN VARIS VARIABLES

$nombres = ['Isaac','Juan','Ana','Carlos'];

// ES COMO UN DESTRUCTURING DE JAVASCRIPT, CREAMOS UNA VARIABLE POR CADA ITEM DEL ARRAY
list($nombre1,$nombre2,$nombre3,$nombre4) = $nombres;

echo $nombre1 . PHP_EOL;
echo $nombre2 . PHP_EOL;
echo $nombre3 . PHP_EOL;
echo $nombre4 . PHP_EOL;

list($nombre1,,$nombre2) = $nombres;
echo $nombre1 . PHP_EOL; //Isaac
echo $nombre2 . PHP_EOL; //Ana


$funcionarios = [
  'administrador' => 'isaac',
  'secretaria' => 'susena',
  'contabilidad' => 'carlos'
];

echo "------------------" . PHP_EOL;

// EXTRAE TODO LAS LLAVES
extract($funcionarios);

echo $administrador . PHP_EOL;
echo $secretaria . PHP_EOL;
echo $contabilidad . PHP_EOL;


// IMPORTANTE: NO DEBEMOS USAR EXTRACT CON ARRAYS QUE NO CONTROLADOS, POR EJEMPLO LOS DATOS DE LA SUPERGLOBAL $_POST[] CUANDO HACEMOS LA SUMISION DE UN FORMULARIO