<?php
// TYPE DECLARATIONS

// LAS DECLARACIONES DE TIPOS FUERON AGREGADAS EN LA VERSION 5.1 DE PHP Y EN LA VERSION 5.4 FUERON AGREGADOS MAS TIPOS, COMO POR EJEMPLO O CALLABLE

// OTROS TIPOS APENAS FUERON AGREGADOS EN LA VERSION 7
// Y EN LA VERSION 8, FUE AGREGADO EL TIPO MIXED


// EL TIPO CALLABLE TIENE QUE SER UNA FUNCION, METODO O OBJETO. PODEMOS, POR EJEMPLO, USAR UNA FUNCION ANONIMA

$hablar = function ($mensaje) {
  echo "Mensaje es $mensaje";
};

// callable significa que tiene que ser una funcion
function mi_funcion(callable $funcion, $datos)
{
  // mandamos a llamar a la funcion que esta asociada a falar
  $funcion($datos);
}

// le pasamos la funcion hablar que contiene el mensaje pasado
mi_funcion($hablar, "Este es mi mensaje");


// TIPOS BOOL, INT, FLOAT Y STRING FUERON AGREGADOS EN LA VERSION 7, ES NECESARIO TENER EN CUENTA QUE PHP HACE CONVERSION AUTOMATICA