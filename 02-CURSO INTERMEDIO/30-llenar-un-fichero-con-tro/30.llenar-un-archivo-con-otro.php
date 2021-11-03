<?php
// PORQUE UTILIZAR LOS HANDLES / APUNTADORES
// VAMOS A HACER UN EJERCICIO SIMPLE: LEER DATOS DE UN  FICHERO Y GUARDARLO EN OTRO

// dirname(__FILE__) - path donde esta ubicado el archivo php

// crear los dos punteros
$origen = fopen(dirname(__FILE__) . '/datos.txt', 'r');
$destino = fopen(dirname(__FILE__) . '/datos_finales.txt', 'w');

// Lee del origen y graba en el destino
while (!feof($origen)) { //lee el archivo origen mientras no es el final
  // destino -ubicacion donde sera escrito los datos, fgets(origen - escribe lo que hay en origen)
  fwrite($destino, fgets($origen));
}

// cerramos los archivos
fclose($origen);
fclose($destino);
