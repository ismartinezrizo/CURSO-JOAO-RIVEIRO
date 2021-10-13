<?php
// Funciones anónimas ¶
// Las funciones anónimas, también conocidas como cierres (closures), permiten la creación de funciones que no tienen un nombre especificado. Son más útiles como valor de los parámetros de llamadas de retorno, pero tienen muchos otros usos.

$a = function () {
  echo "La variable a es una funcion \n";
}; //tiene que terminar en punto y coma

$a();

# ------------------------------------------
$saludos = function ($nombre) {
  echo "Hola $nombre bienvenido \n";
};

$saludos("Isaac");

# ------------------------------------------
$caminar = function ($kilometros) {
  return "Deseas caminar $kilometros km\n";
};

echo $caminar(100);

# ------------------------------------------
$funcion_a = function () {
  return "Soy la funcion a";
};

$pasarle_la_funcion_a = function ($funcion) {
  echo $funcion;
};

$pasarle_la_funcion_a($funcion_a());
