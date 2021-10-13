<?php
// APARTIR DE PHP 7.1, PASO A SER POSIBLE USAR UN TIPO DE DECLARACION NULLABLE.
// CON ESTO, EN VEZ DEL TIPO DE VALOR "NORMAL" QUE LA VARIABLE PUEDE TENER, TAMBIEN PUEDE TENER EL VALOR NULL.
// USAMOS PARA ESO UN PREFIJO ? ANTES DEL TIPO DE VALOR

declare(strict_types=1);
// ? para que sea valido un null
function hablar(?string $mensaje)
{
  echo $mensaje . "\n";
}

// es valida un string y un null
hablar('Mi mensaje');
hablar(null); //tambien es posible

// EN PHP 8 HAY POSIBILIDADES DE DEFINIR MAS DE UN TIPO PARA EL MISMO ARGUMENTO. LOS TIPOS PUEDEN SER SEPARADOS POR VARAS VERTICALES |

function conversar(int|string $mensaje)
{
  echo $mensaje . "\n";
}

// son validas las dos
conversar('Hola mundo');
conversar(2000);


// O EN EL CASO DE TIPO DE RETORNO
function calcular_cuadrado_de(int|float $valor): int|float
{
  return $valor * $valor;
}

echo calcular_cuadrado_de(5) . "\n";
echo calcular_cuadrado_de(5.5) . "\n";
