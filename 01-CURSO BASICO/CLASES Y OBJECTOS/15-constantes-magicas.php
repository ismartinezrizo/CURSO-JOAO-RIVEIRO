<?php

//& CONSTANTES MAGICAS
//& LAS CONSTANTES MAGICAS SON 8 Y SE NOMBRAN ASI PORQUE SU VALOR VARIA AUTOMATICAMENTE DEPENDE DONDE SERAN USADAS

echo __LINE__ . "\n"; //Indica el numero de linea del codigo en el script

echo __FILE__ . "\n"; //Indica el camino completo del script

echo __DIR__ . "\n"; //Indica la carpeta donde esta ubicado el script

test();
function test()
{
  $a = true;
  echo "El nombre de la funcion es " . __FUNCTION__ . "\n"; //Indica el nombre de la funcion
}

class MiClase
{
  function identificar()
  {
    echo __CLASS__ . "\n"; //Indica el nombre de la clase
    echo __METHOD__ . "\n"; //Indica el nombre del metodo
  }
}

$miClase = new MiClase();
$miClase->identificar();


// __TRAIT__ ESTA RELACIONADO CON EL MECANISMO DE REUTILIZACION DE CODIGO
echo __NAMESPACE__ . "\n"; //Indica el nombre de namespace actual