<?php
// DATETIME - ADD Y SUB

// podemos agregar y subtraer periodos de tiempos en una fecha, para eso usamos el metodo add y sub.

// DateInterval:
// P - Periodo
// PT - Periodo de tiempo

$fecha = new DateTime('01-01-2000 00:00:00');

// -------------------------------------------------------
//                     CON ADD
// -------------------------------------------------------

$fecha->add(new DateInterval('P30D')); //agregar 30 dias
$fecha->add(new DateInterval('P2W')); //W de week(semana) agregar dos semanas

// agregar dos horas a la fecha
$fecha->add(new DateInterval('PT2H'));

// agregar dos minutos a la fecha
$fecha->add(new DateInterval('PT2M'));

// agregar dos segundos a la fecha
$fecha->add(new DateInterval('PT2S'));

echo $fecha->format('d-m-Y H:i:s') . PHP_EOL;

// -------------------------------------------------------
//                     DATE_SUB
// -------------------------------------------------------
// date_sub — Sustrae una cantidad de días, meses, años, horas, minutos y segundos de un objeto DateTime

// QUITAR UN DIA A LA FECHA
$fecha->sub(new DateInterval('P1D'));

// QUITAR UNA HORA ALA FECHA
$fecha->sub(new DateInterval('PT1H'));

// ETC

echo $fecha->format('d-m-Y H:i:s') . PHP_EOL;
