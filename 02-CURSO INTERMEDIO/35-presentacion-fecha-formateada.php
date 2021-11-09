<?php
//  FECHA Y HORA
// La utilizacion de fechas y horas en una aplicacion es fundamental y practicamente siempre esta presente en todos los proyectos.En php existe la posibilidad de usar algunas funciones mas antiguas para la presentacion de fechas y horas, o utilizar una metodologia mas proxima de la programacion orientada a objetos con la clase DateTime.

// Fecha del sistema.

date_default_timezone_set('America/Managua'); //Hora de managua
$hora = date('H:i:s');
echo "HORA: " . $hora . PHP_EOL;

$fecha = date("Y-m-d");
echo "FECHA: " . $fecha;


// https://www.php.net/manual/es/function.date.php
