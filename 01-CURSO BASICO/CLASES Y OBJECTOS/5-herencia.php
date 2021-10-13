<?php
//* HERENCIA | INHERITANCE

//^  LA HERENCIA ES EL MECANISMO ATRAVES DEL CUAL PODEMOS CREAR CLASES QUE HEREDAN PROPIEDADES Y METODOS DE OTRA CLASE.

//^ LA CLASE INICIAL A PARTIR DE LA CUAL OTRAS VAN A SER CREADAS, ES DESIGNADA POR CLASE BASE

//^  TODAS LAS CLASES QUE VAN A HEREDAR PROPIEDADES Y METODOS DE LA CLASE BASE SON DESIGNADAS POR CLASES DERIVADAS.

//^  EJEMPLO: (CLASE TRADICIONAL).

class Animales
{
  public $especie;
  public $peso;

  public function tipoEspecie()
  {
    return "Este animal es de la especie {$this->especie}";
  }
}

class Mamifero extends Animales
{
  //&* NO ES NECESARIO VOLVER A DEFINIR LAS PROPIEDADES Y METODOS QUE YA EXISTEN EN LA CLASE BASE.

  //&* PODEMOS AGREGAR OTRAS PROPIEDADES Y OTROS METODOS
  public $cantidad_piernas;
  public $tiene_pelo;

  public function tieneCuantasPiernas()
  {
    return "El animal de la especie {$this->especie} tiene {$this->cantidad_piernas} piernas";
  }
}

$mamifero = new Mamifero();
$mamifero->especie = "Caballo";
$mamifero->cantidad_piernas = 4;

echo $mamifero->tieneCuantasPiernas();
