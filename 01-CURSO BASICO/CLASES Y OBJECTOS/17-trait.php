<?php

// TRAITS

// SON UN GRUPO DE METODOS QUE PUEDEN SER INSERTADOS DENTRO DE UNA CLASE,
// ESTA DESDE LA VERSION 5.4 PARA REUTILIZAR CODIGO.

//LOS TRAITS SON DIFINIDOS CON LA EXPRESION TRAIT, SEGUIDO POR EL NOMBRE Y EL BLOQUE DE CODIGO.
//LAS REGLAS PARA DAR NOMBRE A LOS TRAITS SON LAS MISMAS QUE PARA LAS CLASES.


trait MisHabilidades
{
  public function hablar($mensaje)
  {
    echo "Yo dijo $mensaje";
  }

  public function saltar($metros)
  {
    echo "Yo salto $metros metros";
  }
}

// LAS CLASES QUE USARAN TRAIT APENAS TIENEN QUE USAR LO SIGUIENTE
class Humano
{
  // usando el trait
  use MisHabilidades;
}

$h = new Humano();
$h->hablar('Hola mundo');
echo "\n";
$h->saltar(3);
