<?php
//& STATIC

//^ LA PALABRA CLAVE STATIC PUEDE SER USADA PARA DECLARAR PROPIEDADES Y METODOS DE UNA CLASE QUE PUEDEN SER ACCEDIDO SIN QUE SEA NECESARIO CREAR UN OBJETO A PARTIR DE ESA CLASE.

//^ EJEMPLO A:

// class Test
// {
//   //* Intance members - un miembro por cada objeto creado a partir de una clase.
//   public $nombre;
//   function test()
//   {
//   }

//   //* static o clase members - apenas existente una vez en la clase.
//   static $edad;
//   static function mover()
//   {
//   }
// }

//^ EJEMPLO B
// class Operaciones
// {
//   static $valor1;
//   static $valor2;

//   static function sumar()
//   {
//     return self::$valor1 + self::$valor2;
//     return Operaciones::$valor1 + Operaciones::$valor2; # ALTERNATIVA
//   }
// }

// Operaciones::$valor1 = 10;
// Operaciones::$valor2 = 20;
// echo Operaciones::sumar();

//^ EJEMPLO C
class Operaciones
{
  // retorna un numero sorteado entre $min y $max
  static function numeroAleatorio($min, $max)
  {
    return rand($min, $max);
  }

  static function calcularFormula($a, $b)
  {
    // (A X 2) + (B X A)
    return ($a * 2) + ($b * $a);
  }

  static function crearUnNombre()
  {
    $nombres = ['isaac', 'ana', 'carlos', 'francisco', 'juan'];
    $apellidos = ['martinez', 'rizo', 'garcia', 'chavarria', 'ruiz'];
    // -1 porque el array comienza en 0
    return $nombres[rand(0, count($nombres) - 1)] . ' ' . $apellidos[rand(0, count($apellidos) - 1)];
  }
}

echo Operaciones::numeroAleatorio(1, 1000);
echo "\n";
echo Operaciones::calcularFormula(10, 20);
echo "\n";
echo Operaciones::crearUnNombre();
