<?php
// UNIX TIMESTAMP.
// Existe valor numerico muy importante para los lenguajes de programacion y de un modo especial para las bases de datos, que es el unix Timestamp.

// Basicamente, el unix timestamp es un total de segundos recorridos desde 1 de enero de 1970, que es la fecha de marca el inicio de la era del sistema unix

$semanaSiguiente = time() + (7 * 24 * 60 * 60);
// 7 días; 24 horas; 60 minutos; 60 segundos
echo 'Ahora:            ' . date('Y-m-d') . "\n";
echo 'Semana Siguiente: ' . date('Y-m-d', $semanaSiguiente) . "\n";
// o usar strtotime():
echo 'Semana Siguiente: ' . date('Y-m-d', strtotime('+1 week')) . "\n";
