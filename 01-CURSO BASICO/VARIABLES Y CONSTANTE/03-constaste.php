<?php
// USANDO DEFINE
define('PI', 3.1416);
echo PI;

echo "\n";
// USANDO CONST
const PI2 = 3.1416;

echo PI2;

echo "\n";
const ANIMALES = array('perro', 'gato', 'pájaro');
echo ANIMALES[1]; // muestra "gato"

echo "\n";
define('ANIMALES2', array(
  'perro',
  'gato',
  'pajaro'
));
echo ANIMALES2[1];

//? A diferencia de definir constantes usando define(), las constantes definidas con la palabra clave const deben declararse en el nivel superior del entorno de la aplicación porque se definen en tiempo de ejecución. Esto significa que no pueden declararse dentro de funciones, bucles, sentencias if o bloques try/ catch.

//* Constantes predefinidas 

//? PHP ofrece un gran número de constantes predefinidas a cualquier script en ejecucción. Muchas de estas constantes, sin embargo, son creadas por diferentes extensiones, y sólo estarán presentes si dichas extensiones están disponibles, bien por carga dinámica o porque han sido compiladas.

//? Hay nueve constantes mágicas que cambian dependiendo de dónde se emplean. Por ejemplo, el valor de __LINE__ depende de la línea en que se use en el script. Todas estas constantes «mágicas» se resuelven durante la compilación, a diferencia de las constantes normales que lo hacen durante la ejecución. Estas constantes especiales son sensibles a mayúsculas Estas constantes especiales distinguen mayúsculas y minúsculas, y son las siguientes:

//? Varias constantes "mágicas" de PHP
//? Nombre	Descripción
//? __LINE__	El número de línea actual en el fichero.
//? __FILE__	Ruta completa y nombre del fichero con enlaces simbólicos resueltos. Si se usa dentro de un include, devolverá el nombre del fichero incluido.
//? __DIR__	Directorio del fichero. Si se utiliza dentro de un include, devolverá el directorio del fichero incluído. Esta constante es igual que dirname(__FILE__). El nombre del directorio no lleva la barra final a no ser que esté en el directorio root.
//? __FUNCTION__	Nombre de la función.
//? __CLASS__	Nombre de la clase. El nombre de la clase incluye el namespace declarado en (p.e.j. Foo\Bar). Tenga en cuenta que a partir de PHP 5.4 __CLASS__ también funciona con traits. Cuando es usado en un método trait, __CLASS__ es el nombre de la clase del trait que está siendo utilizado.
//? __TRAIT__	El nombre del trait. El nombre del trait incluye el espacio de nombres en el que fue declarado (p.e.j. Foo\Bar).
//? __METHOD__	Nombre del método de la clase.
//? __NAMESPACE__	Nombre del espacio de nombres actual.
//? ClassName::class	El nombre de clase completamente cualificado. Véase también ::class.