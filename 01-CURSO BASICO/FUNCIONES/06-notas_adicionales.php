<?php
function nombre_funcion($valor1, $valor2)
{
  // codigo aqui
}

// nombre_funcion(3); //esperaba dos argumentos


function otraFuncion()
{
  //  ESTOS SE PASARAN COMO ARGUMENTOS
  $x = func_get_arg(0);
  $y = func_get_arg(1);
  $z = func_get_arg(2);

  echo "$x - $y - $z";
  echo "\n";
  //  CUANTOS PARAMETROS FUERON PASADOS
  echo "FUERON PASADOS " . func_num_args() . " ARGUMENTOS";
}

// otraFuncion(10, 30, 20);

// FUNCION CON PARAMETROS INDIFINIDOS(PUEDEN SER VARIOS)
function miFuncion(...$argumentos)
{
  foreach ($argumentos as $v) {
    echo "$v \n";
  }
}

miFuncion(10, 30, 40, 30);
