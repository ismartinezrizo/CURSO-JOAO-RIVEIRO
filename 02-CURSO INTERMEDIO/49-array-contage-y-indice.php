<?php 

  // array - contages y indices
  // All array el indice inicial es 0, un array con 3 dimenciones tendra el indicie 0,1,2.

  //^ EL COUNT EN PHP SOLO ES UTILIZADA CON LOS ARRAY NO SE PUEDE CON UN STRING


  $nombres = ['Isaac', 'Abraham', 'Jose', 'Juan', 'Jesus'];
  // para contar el numero total de valores usamos count

  // echo count($nombres) . PHP_EOL;

  // RECORRER UN ARRAY
  for($i = 0; $i < count($nombres); $i++){
    echo $nombres[$i] . PHP_EOL;
  }


  echo PHP_EOL;

  // LA FUNCION COUNT TIENE UN SEGUNDO ARGUMENTO. PARA ARRAY MULTIDIMENCIONAL
  $empresa = [
    'administracion' => ['juan','carlos'],
    'almacen' => ['antonio','marcos','maria','ana','isaac','manuel','mario'],
  ];

// INCLUYE EN EL CONTAJE LAS LLAVES
  echo count($empresa, COUNT_RECURSIVE) . PHP_EOL;

  // SI SABES QUE TENEMOS DOS CLAVES PODEMOS RESTARLAS PARA QUE NOS DEVUELVA EL VALOR QUE DESEAMOS
  $cantidad_empresa = count($empresa, COUNT_RECURSIVE);

  echo $cantidad_empresa - 2;




?>