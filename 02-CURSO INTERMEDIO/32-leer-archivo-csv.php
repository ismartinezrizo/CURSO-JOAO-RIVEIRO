<?php
// EN LA LECTURA DE TEXTO, PHP CONTIENE NATIVAMENTE ALGUNAS FUNCIONES PARA CARGAR INFORMACION APARTIR DE FICHEROS CSV

// UN FICHERO CSV(COMMA SEPARATED VALUES), PERMITE GUARDAR DATOS EN ESQUEMAS DE TABLAS, ES MUY UTILIZADO EN LA EXPORTACION DE DATOS A PARTIR DE EXCEL Y DE OTRAS APLICACIONES DE ESCRITORIOS Y WEB. EL FICHERO PUEDE CONTENER VARIOS FORMATOS DIFERENTES(DATOS SEPARADOS POR COMAS PUNTO Y COMA DELIMITADOS POR COMILLAS, ETC).

// EJEMPLO:

$archivo_csv = dirname(__FILE__) . "/32-datos.csv";

$max_lines = 1;
$file = fopen($archivo_csv, 'r');
while (!feof($file)) {
  // funcion nativa
  $linea = fgetcsv($file);
  print_r($linea);
  if ($max_lines-- == 0) {
    die('terminado');
  }
}
fclose($file);
