<?php
#Generators
# Un generador es una funcion que permite general serie de valores.
# Cada valor es desarrollada por la funcion atraves de la instruccion yiel.
# A lo contrario del return, la instruccion yiel guada el estado de la funcion.
# permitiendo que la funcion continue a partir del estado donde quedeo en la ultima llamada

function buscar_numero()
{
  for ($i = 0; $i < 10; $i++) {
    yield $i;
  }
}

# La funcion generadora funciona como un iterador, pudiendo ser usada en un ciclo
# hasta que el generador no tenga mas valores para devolver con el yield

foreach (buscar_numero() as $numero) {
  echo "$numero \n";
}


function buscar_nombres()
{
  yield "Isaac";
  yield "Maria";
  // de una coleccion
  yield from ["Carlos", "Ana", "Antonio"];
  yield "Fernando";
}

foreach (buscar_nombres() as $nombre) {
  echo "$nombre \n";
}
