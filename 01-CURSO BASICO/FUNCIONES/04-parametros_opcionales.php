<?php
// parametro obligatorio y parametro opcional, los parametros opcionales tienen que ser definidos despues de los parametros obligatorios
function multiplicar($a, $b = 5)
{
  echo $a * $b;
}


multiplicar(10);
echo "\n";
multiplicar(10, 20);
