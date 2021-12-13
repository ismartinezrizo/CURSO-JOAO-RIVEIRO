<?php

$fecha_nacimiento = new DateTime('11-11-2021');


echo calcular_edad($fecha_nacimiento);



function calcular_edad($fecha_nacimiento)
{

  $fecha_actual = new DateTime();

  // SI LA FECHA ACTUAL ES IGUAL A LA FECHA DE NACIMIENTO TENEMOS POR DEFECTO 1 
  if ($fecha_actual->format('Y') == $fecha_nacimiento->format('Y')) {
    $edad = 1;
  } else {
    $edad = $fecha_actual->format('Y') - $fecha_nacimiento->format('Y');
  }

  // el mes de la fecha actual es menor que el mes del nacimiento
  if ($fecha_actual->format('m') < $fecha_nacimiento->format('m')) {
    $edad--;
  } elseif ($fecha_actual->format('m') == $fecha_nacimiento->format('m')) {
    // estamos en el mes de nacimiento
    // vamos a ver si el dia ya 
    if ($fecha_actual->format('d') < $fecha_nacimiento->format('d')) {
      $edad--;
    }
  }
  // SI EDAD ES DIFERENTE DE 1 
  return $edad != 1 ? "$edad Años " : "$edad Año";
}
