<?php
// -------------------------------------------------------
// DIFERENCIAS ENTRE FECHAS
// -------------------------------------------------------

$fecha2 = new DateTime('2000-01-01');
$fecha3 = new DateTime('2021-05-12');

echo $fecha2->format('Y-m-d') . PHP_EOL;
echo $fecha3->format('Y-m-d') . PHP_EOL . PHP_EOL;

echo "Diferencias->" . PHP_EOL;

$diferencia = $fecha2->diff($fecha3);

// DIFERENCIAS EN AÑOS
echo $diferencia->format('%R%Y años') . PHP_EOL;

// DIFERENCIAS EN MESES
echo $diferencia->format('%R%m Meses') . PHP_EOL;

// DIFERENCIAS EN DIAS
echo $diferencia->format('%R%a dias') . PHP_EOL;


// DOCUMENTACION https://www.php.net/manual/es/dateinterval.format.php