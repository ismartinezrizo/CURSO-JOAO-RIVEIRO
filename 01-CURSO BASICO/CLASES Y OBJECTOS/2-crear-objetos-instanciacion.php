<?php
//! CLASES
//* Para acceder a las propiedades de una clase, dentro de los metodos de la clase,
//* es usada la pseudo variable $this seguido del operador seta ->

class Humano
{
  public $nombre = "Isaac";
  public $apellido = "Martinez";

  public function nombreCompleto()
  {
    return $this->nombre . ' ' . $this->apellido;
  }
}


// INSTANCIAR UN OBJETO
$hombre = new Humano();
echo $hombre->nombreCompleto(); #Isaac Martinez
