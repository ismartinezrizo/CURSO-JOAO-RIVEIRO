<?php

// PHP <= 7
class Humano1
{
  public $nombre;
  public $apellido;

  function __construct($nombre, $apellido)
  {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
  }
}


// PHP >= 8
class Humano2
{
  function __construct(public $nombre, public $apellido)
  {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
  }
}


$h1 = new Humano1("Isaac", "Martinez");
echo "Nombre: " . $h1->nombre . " " . $h1->apellido;
echo "\n";

$h2 = new Humano2("Ana", "Fernandez");
echo "Nombre: " . $h2->nombre . " " . $h2->apellido;
