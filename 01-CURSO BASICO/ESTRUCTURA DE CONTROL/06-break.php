<?php

//^ break finaliza la ejecución de la estructura for, foreach, while, do-while o switch en curso.
//^ break acepta un argumento numérico opcional que indica de cuántas estructuras anidadas circundantes se debe salir. El valor predeterminado es 1, es decir, solamente se sale de la estructura circundante inmediata.

$array = ['uno', 'dos', 'tres', 'cuatro', 'pare', 'cinco'];

foreach ($array as $valor) {
  echo "- $valor \n";
  if ($valor == 'pare') {
    break;
  }
}


$i = 0;
// mientras suma uno a i
while (++$i) {
  // en caso de valor de i sea
  switch ($i) {
    case 5:
      echo "En 5\n";
      break 1;  /* Sólo sale del switch. */
    case 10:
      echo "En 10; saliendo\n";
      break 2;  /* Sale del switch y del while. */
    default:
      break;
  }
}
