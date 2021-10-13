<?php

// STRINCT TYPING

declare(strict_types=1);

// EL COMPORTAMIENTO DE PHP ES PROBAR CONVERTIR LOS TIPOS DECLARADOS.

function hablar(string $mensaje)
{
  echo $mensaje;
}

hablar('Hola mundo'); //es posible
echo "\n";
hablar(2000); //es posible


function sumar(int $v1, int $v2)
{
  return $v1 + $v2;
}

echo sumar(10, 20); //es posible
echo sumar('a', 'b'); //es posible tambien

// PERO PODEMOS OBRIGAR A PHP A SEGUIR LAS REGLAS ESTRICTAMENTE DEFINIDA.

// declare(strict_types);
