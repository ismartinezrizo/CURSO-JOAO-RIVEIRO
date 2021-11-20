<?php
// dias pasados desde un fecha

$fecha_actual = new DateTime();
$fecha_deuda = new DateTime('2020-10-1');

$diferencias_dias = $fecha_deuda->diff($fecha_actual);

echo $diferencias_dias->format('%R%m Anos') . PHP_EOL;
echo $diferencias_dias->format('%R%m meses') . PHP_EOL;
echo $diferencias_dias->format('%R%d dias') . PHP_EOL;
