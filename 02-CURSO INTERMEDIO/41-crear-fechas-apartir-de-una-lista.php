<?php
// DATETIME - crear una fecha apartir de un formato.

// vamos a imaginar que nos dan un lista de fechas con un determinado formato y que queremos "asimilar" esas fechas para la estructura DateTime.

// En este caso podemos usar el metodo estatico createFromFormat


// EN UNA FECHA ESPECIFICA

// $fecha = DateTime::createFromFormat('d-m-Y', '24-08-1990');
// EL FORMAT ES LA MANERA EN COMO SE VA A MOSTRAR LA FECHA
// echo $fecha->format('Y-m-d');


$fechas =  [
  '21-10-1998',
  '12-09-1996',
  '01-07-2001',
  '08-12-2005',
  '22-11-1987',
  '24-08-1990',
];

// PRIMERO RECORREMOS EL ARRAY
foreach ($fechas as $fecha) :
  // LUEGO CREAMOS EL FORMATO POR CADA ITEM
  $data = DateTime::createFromFormat('d-m-Y', $fecha);
  // MOSTRAMOS LA FECHA, CON EL FORMATO DE DIA MES YEAR, PHP_EOL = \n
  echo $data->format('d-m-Y') . PHP_EOL;
endforeach;

// https://www.php.net/manual/es/datetime.createfromformat.php