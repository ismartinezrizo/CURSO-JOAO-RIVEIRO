<?php
//^ continue acepta un argumento numérico opcional, que indica a cuántos niveles de bucles encerrados se ha de saltar al final. El valor por omisión es 1, por lo que salta al final del bucle actual.

$array = ['uno', 'dos', 'tres', 'cuatro', 'cinco'];

foreach ($array as $valor) {

  if ($valor == 'tres') {
    continue;
  }

  echo "- $valor \n";
}
