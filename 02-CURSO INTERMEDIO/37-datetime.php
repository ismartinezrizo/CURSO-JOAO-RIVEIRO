<?php

// DATETIME.
// La clase Datetime fue introducida en php 5.2 y es actualmente la mejor opcion para utilizacion y manipulacion de datos en php.
// con esta clase podemos ejecutar practicamente todo el tipo de operacion con datos y hora, efectuando calculos y presentacion de los valores en varios formatos

$ahora = new DateTime();
echo $ahora->format('Y-m-d H:i:s') . PHP_EOL;
