<?php
//& ACCESS LEVELS - NIVELES DE ACESSO.
//& Existen 3 tipos de niveles de acceso a # elementos dentro de una clase.
//^ PUBLIC, PROTECTED Y PRIVATE

// class MiClase
// {
//   public $valor1;
//   protected $valor2;
//   private $valor3;
// }

// $otraClase = new MiClase();
// $otraClase->valor1 = '111'; //& POSIBLE
// $otraClase->valor2 = '222'; //& NO ES POSIBLE RESULTA EN UN ERROR.
// $otraClase->valor3 = '333'; //& NO ES POSIBLE RESULTA EN UN ERROR.

//! POR QUE?
//^ PUBLIC
//* Son miembros publicos(propiedades y metodos) de una clase, son simpre accesibles.
//* Si creamos una objeto a partir de la clase, tenemos acceso directo a ese elemento.

class TodoPublico
{
  public $propiedad;

  public function metodo()
  {
    echo "Metodo publico";
  }
}

$obj1 = new TodoPublico();
$obj1->propiedad = 'a';
$obj1->metodo();
