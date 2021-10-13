<?php

// function saludar($nombre)
// {
//   echo "Hola $nombre, bienvenido a PHP";
// }
// saludar("Isaac");

// valores predeterminados
// function saludar($nombre = 'Jesus')
// {
//   echo "Hola $nombre, bienvenido a PHP";
// }


$nombres = ['juan', 'Ana', 'pedro', 'maria'];
foreach ($nombres as $nombre) {
  saludos($nombre);
}

function saludos($nombre)
{
  echo "Bienvenido $nombre \n";
}

// function suma(int $a, int $b)
// {
//   echo "\nLa suma es " . $a + $b;
// }

// suma(10, 4);


// function saludar2(string $nombre)
// {
//   echo "Hola $nombre eres bienvenido";
// }

// saludar2("Isaac");

// Ejemplo #2 Paso de parámetros de una función por referencia


// function add_algo(&$cadena)
// {
//   $cadena .= 'y algo más.';
// }

// $cad = 'Esto es una cadena, ';

// add_algo($cad);

// echo $cad;    // imprime 'Esto es una cadena, y algo más.'