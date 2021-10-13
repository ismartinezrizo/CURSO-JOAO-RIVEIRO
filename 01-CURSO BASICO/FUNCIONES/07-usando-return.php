<?php
//^ RETURN = Se puede devolver cualquier tipo, incluidos arrays y objetos. Esto causa que la función finalice su ejecución inmediatamente y pase el control de nuevo a la línea desde la que fue llamada.

// function hablar()
// {
//   return;
//   echo "NO VA A MOSTRAR ESTE TEXTO";
// }


// function agregar($a, $b)
// {
//   $resultado = $a + $b;
//   return $resultado;

//   // O DE ESTA OTRA FORMA
//   // return $a + $b;
// }

// echo agregar(10, 20); #va a mostrar 30


// OTRO EJEMPLO

$nombre = "Isaac";

if (validarNombre($nombre)) {
  echo "El cliente es correcto \n";
}
function validarNombre($nombre)
{
  if ($nombre == "Isaac") {
    return true;
  } else {
    return false;
  }
}

// UNA FUNCION SIN RETORNO DEVUELVE NULL 
// O QUE TENGA EL RETURN; DEVUELVE IGUAL NULL

function test()
{
  //codigo
}

if (test() == null) {
  echo "Funcion con retorno igual a nulo";
}
