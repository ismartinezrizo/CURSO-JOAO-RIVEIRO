<?php

# el constructor es un metodo especial dentro de una clase
# que es siempre ejecutado automaticamente cuando es creado un objeto apartir de una clase. Este metodo es definido de una forma especial. __(dos guiones bajos). Son llamados metodos magicos porque tienen una ejecucion especifica o automatica asociada.

class Humano1
{
  private $nombre;
  private $apellido;

  # CONSTRUCTOR DE LA CLASE
  function __construct($nombre, $apellido)
  {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
  }

  public function nombreCompleto()
  {
    return $this->nombre . ' ' . $this->apellido;
  }
}


// INSTANCIAR UN OBJETO
$hombre = new Humano1("Isaac", "Martinez Rizo");
echo $hombre->nombreCompleto(); #Isaac Martinez

echo "\n";

$mujer = new Humano1("Ana", "Gutierrez Gonzalez");
echo $mujer->nombreCompleto();
