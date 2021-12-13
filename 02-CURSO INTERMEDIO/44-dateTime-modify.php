<?php
$nicaragua = new DateTime('now', new DateTimeZone('America/Managua'));


// agregar un minuto
$nicaragua->modify("+1 minute");

// agregar 5 minutos
// $nicaragua->modify("+1 minutes");

// agregar 1 hora mas 
$nicaragua->modify("+1 hour");

// agrega 3 horas
// $nicaragua->modify("+3 hours");

// agregar un dia
$nicaragua->modify("+1 day");

// agrega dos dias
// $nicaragua->modify("+2 days");

// agrega un mes
$nicaragua->modify("+1 month");

// agrega dos meses
// $nicaragua->modify("+2 months");

echo $nicaragua->format('d-m-Y H:i:s') . PHP_EOL;
