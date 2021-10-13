<?php
function agregar($a, $b = 10, $c = 20)
{
  echo $a + $b + $c;
}


agregar(100);

echo "\n";

// En php8 podemos hacer de esta manera
agregar(a: 0, c: 1000);

echo "\n";

function mostrarNombreApellido($nombre, $apellido = "Martinez")
{
  echo "Tu nombre es $nombre y tu apellido es $apellido";
}

mostrarNombreApellido(nombre: "Isaac Abraham", apellido: "Rizo");
