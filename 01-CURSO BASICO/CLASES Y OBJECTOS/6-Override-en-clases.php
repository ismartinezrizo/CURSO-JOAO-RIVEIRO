<?php
// OVERRIDE

// EL MECANISMO DE OVERRIDING PERMITE A UNA CLASE DERIVADA TENER METODOS RESCRITO ESPECIFICAMENTE PARA ESA CLASE.

// POR EJEMPLO, PODEMOS TENER METODO TEST EN LA CLASE BASE Y TENER EL MISMO METODO TEST CON CODIGO DIFERENTE EN LA CLASE DERIVADA.

// class Animal
// {
//   public $especie = 'Ave';
//   function mover()
//   {
//     echo "Mover a partir de la clase base.";
//   }
// }

// class Mamifero extends Animal
// {
//   public $especie = 'Caballo';
// }

// class Pez extends Animal
// {
//   function mover()
//   {
//     echo "Mover a partir de la clase PEZ";
//   }
// }

// $animal = new Animal();
// echo "Especie: " . $animal->especie . "\n";
// $animal->mover();
// echo "\n";

// $mamifero = new mamifero();
// echo "Especie: " . $mamifero->especie . "\n";
// $mamifero->mover();
// echo "\n";

// $pez = new Pez();
// $pez->mover();

// PARENT CLASS
class Rectangulo
{
  public $ancho, $altura;
  function __construct($ancho, $altura)
  {
    $this->ancho = $ancho;
    $this->altura = $altura;
  }

  function calcularArea()
  {
    return $this->ancho * $this->altura;
  }
}

class Cuadrado extends Rectangulo
{
  function __construct($medidas)
  {
    $this->ancho = $medidas;
    $this->altura = $medidas;
  }
}

$rectangulo = new Rectangulo(10, 20);
$cuadrado = new Cuadrado(10);

echo $rectangulo->calcularArea();
echo "\n";

echo $cuadrado->calcularArea();
echo "\n";


// PODEMOS LLAMAR AL CONSTRUCTOR DE LA CLASE BASE USANDO PARENT

class Cuadrado1 extends Rectangulo
{
  function __construct($medidas)
  {
    parent::__construct($medidas, $medidas);
  }
}

$cuadrado1 = new Cuadrado1(5);
echo $cuadrado1->calcularArea();
echo "\n";

// LA EXPRESION PARENT ES UN NOMBRE ALTERNATIVO A EL NOMBRE DE LA CLASE BASE.
// PODEMOS TAMBIEN HACER DE LA SIGUIENTE FORMA.

class Cuadrado2 extends Rectangulo
{
  function __construct($medidas)
  {
    // EN VEZ DE USAR parent::__construct($medidas); usamos de la siguiente manera
    Rectangulo::__construct($medidas, $medidas);
  }
}

$cuadrado2 = new Cuadrado2(2);
echo $cuadrado2->calcularArea();
