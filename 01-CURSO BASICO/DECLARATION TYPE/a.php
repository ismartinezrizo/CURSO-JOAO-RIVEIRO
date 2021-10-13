<?php

// TYPES DECLARATIONS

// CUANDO DECIMOS QUE PHP ES UN LENGUAJE SIN TIPO, SIGNIFICA QUE LAS VARIABLES NO ES NECESARIO DECLARAR SU TIPO, NO ES TAN ASI.

// ES POSIBLE ESPECIFICAR CLARAMENTE QUE TIPO DE VALOR PODEMOS USAR PARA PARAMETROS DE FUNCIONES, PROPIEDADES DE CLASEES Y TIPOS DE RETORNO DE FUNCION

// MIREMOS EN EL CASO DE UN ARRAY COMO PARAMETRO DE UNA FUNCION

function hablar(array $mensaje)
{
  echo $mensaje;
}

// hablar('Isaac'); //no es posible

//----------------------------------
function conversar(string $mensaje)
{
  echo $mensaje;
}

// aqui va ser hecha una conversion de entero a string
conversar(2000);

// conversar(['a']); //no es posible