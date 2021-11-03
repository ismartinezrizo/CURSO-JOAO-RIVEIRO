<?php
// vamos a aprender a leer datos de ficheros linea por lina.

// -------------------------------------------------------------------
// lectura de los datos
// $fichero = fopen(dirname(__FILE__) . '/29-fichero-a-leer.txt', 'r');
// lee 10 lineas
// for ($i = 0; $i < 10; $i++) {
//   echo fgets($fichero);
// }

// fclose($fichero);


// -------------------------------------------------------------------
// LA MEJOR MANERA - feof - true si esta en el final del fichero
// -------------------------------------------------------------------

$fichero = fopen(dirname(__FILE__) . '/29-fichero-a-leer.txt', 'r');
// MIENTRAS EL FINAL DEL ARCHIVO DIFERENTE DE TRUE
while (!feof($fichero)) {
  echo fgets($fichero);
}
fclose($fichero);
