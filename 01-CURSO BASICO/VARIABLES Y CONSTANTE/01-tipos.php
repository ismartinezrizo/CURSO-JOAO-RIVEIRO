<?php

//Introducción 

// PHP admite diez tipos primitivos.
// Cuatro tipos escalares:
// boolean
// integer
// float (número de punto flotante, también conocido como double)
// string
// Cuatro tipos compuestos:
// array
// object
// callable
// iterable
// Y finalmente dos tipos especiales:

// resource
// NULL
// Puede que existan aún algunas referencias al tipo "double" en el manual. Considere al tipo double como float; los dos nombres existen sólo por razones históricas.

// El tipo de una variable usualmente no lo declara el programador; al contrario, es decidido en tiempo de ejecución por PHP dependiendo del contexto en el que se emplea dicha variable.
?>
<?php
$un_bool = TRUE;   // un valor booleano
$un_str  = "foo";  // una cadena de caracteres
$un_str2 = 'foo';  // una cadena de caracteres
$un_int  = 12;     // un número entero

echo gettype($un_bool) . "\n"; // imprime: boolean
echo gettype($un_str) . "\n";  // imprime: string

// Si este valor es un entero, incrementarlo en cuatro
if (is_int($un_int)) {
  $un_int += 4;
}

// Si $un_bool es una cadena, imprimirla
// (no imprime nada)
if (is_string($un_bool)) {
  echo "Cadena: $un_bool";
}

# Booleanos
$foo = True; // asigna el valor TRUE a $foo
// == es un operador que comprueba la
// igualdad y devuelve un booleano
if ($accion == "mostrar_version") {
  echo "La versión es 1.23";
}

// esto no es necesario...
if ($mostrar_separadores == TRUE) {
  echo "<hr>\n";
}

// ...porque se puede escribir simplemente:
if ($mostrar_separadores) {
  echo "<hr>\n";
}
# Números enteros (Integers)
$a = 1234; // número decimal
$a = -123; // un número negativo
$a = 0123; // número octal (equivale a 83 decimal)
$a = 0x1A; // número hexadecimal (equivale a 26 decimal)
$a = 0b11111111; // número binario (equivale al 255 decimal)
# Números de punto flotante
$a = 1.234;
$b = 1.2e3;
$c = 7E-10;
$d = 1_234.567; // a partir de PHP 7.4.0
# Cadenas de caracteres (Strings)
echo 'Esto es una cadena sencilla';

echo 'También se pueden incluir nuevas líneas en
un string de esta forma, ya que es
correcto hacerlo así';

// Resultado: Arnold una vez dijo: "I'll be back"
echo 'Arnold una vez dijo: "I\'ll be back"';

// Resultado: Ha borrado C:\*.*?
echo 'Ha borrado C:\\*.*?';

// Resultado: Ha borrado C:\*.*?
echo 'Ha borrado C:\*.*?';

// Resultado: Esto no se expandirá: \n una nueva línea
echo 'Esto no se expandirá: \n una nueva línea';

// Resultado: Las variables $tampoco se $expandirán
echo 'Las variables $tampoco se $expandirán';
# Numeric strings
$foo = 1 + "10.5";                // $foo is float (11.5)
$foo = 1 + "-1.3e3";              // $foo is float (-1299)
$foo = 1 + "bob-1.3e3";           // TypeError as of PHP 8.0.0, $foo is integer (1) previously
$foo = 1 + "bob3";                // TypeError as of PHP 8.0.0, $foo is integer (1) previously
$foo = 1 + "10 Small Pigs";       // $foo is integer (11) and an E_WARNING is raised in PHP 8.0.0, E_NOTICE previously
$foo = 4 + "10.2 Little Piggies"; // $foo is float (14.2) and an E_WARNING is raised in PHP 8.0.0, E_NOTICE previously
$foo = "10.0 pigs " + 1;          // $foo is float (11) and an E_WARNING is raised in PHP 8.0.0, E_NOTICE previously
$foo = "10.0 pigs " + 1.0;        // $foo is float (11) and an E_WARNING is raised in PHP 8.0.0, E_NOTICE previously
# Arrays
// Un array en PHP es en realidad un mapa ordenado. Un mapa es un tipo de datos que asocia valores con claves. Este tipo se optimiza para varios usos diferentes; se puede emplear como un array, lista (vector), tabla asociativa (tabla hash - una implementación de un mapa), diccionario, colección, pila, cola, y posiblemente más. Ya que los valores de un array pueden ser otros arrays, también son posibles árboles y arrays multidimensionales.

$array = array(
  "foo" => "bar",
  "bar" => "foo",
);

// a partir de PHP 5.4
$array = [
  "foo" => "bar",
  "bar" => "foo",
];

# Iterables
// Iterable es un seudotipo introducido en PHP 7.1. Acepta cualquier array u objeto que implemente la interfaz Traversable. Estos dos tipos se recorren con foreach y se pueden emplear con yield from dentro de un generador.
function foo(iterable $iterable)
{
  foreach ($iterable as $valor) {
    // ...
  }
}
# Objetos
// Para crear un nuevo object, utilice la sentencia new para instanciar una clase:s

class foo
{
  function hacer_algo()
  {
    echo "Haciendo algo.";
  }
}

$bar = new foo;
$bar->hacer_algo();

# Recursos
// Un valor tipo resource es una variable especial, que contiene una referencia a un recurso externo. Los recursos son creados y usados por funciones especiales. Vea el apéndice para un listado de todas estas funciones y los tipos resource correspondientes.

# NULO
// El valor especial null representa una variable sin valor. null es el único valor posible del tipo null.

// Una variable es considerada null si:

// se le ha asignado la constante null.

// no se le ha asignado un valor todavía.

// se ha destruido con unset().

$var = NULL;

# Llamadas de retorno (Callbacks / Callables)
// Las llamadas de retorno, o retrollamadas, se pueden indicar con la declaración de tipo callable a partir de PHP 5.4. Esta documentación utilizó la información del tipo callback con el mismo propósito.

// Algunas funciones como call_user_func() o usort() aceptan como parámetro funciones de llamada de retorno definidas por el usuario. Las funciones de llamadas de retorno no sólo pueden ser funciones simples, sino también métodos de un object, incluyendo métodos de clase estáticos.

# Type declarations
// Las declaraciones de tipo se pueden agregar a argumentos de función, valores de retorno y, a partir de PHP 7.4.0, propiedades de clase. Se aseguran de que el valor sea del tipo especificado en el momento de la llamada; de lo contrario, se lanza un TypeError .
# Manipulación de tipos
// PHP no requiere (ni soporta) la definición explicita de tipos en la declaración de variables; el tipo de la variable se determina por el contexto en el cual se emplea la variable. Es decir, si se asigna un valor string a una variable $var, entonces $var se convierte en un string. Si un valor integer es entonces asignado a la misma variable $var, ésta se convierte en integer.
// Un ejemplo de la conversión de tipos automática de PHP es el operador suma '+'. Si al menos uno de los operandos es float, entonces ambos operandos son evaluados como floats y el resultado será un float. De otra manera, los operandos seran interpretados como integers, y el resultado será entonces integer. Tenga en cuenta que esto no implica que se cambien los tipos de los propios operandos; el único cambio es en como se evalúan los operandos y en el tipo de expresión en sí mismo.
$foo = "0";  // $foo es string (ASCII 48)
$foo += 2;   // $foo es ahora un integer (2)
$foo = $foo + 1.3;  // $foo es ahora un float (3.3)
$foo = 5 + "10 Cerditos pequeñitos"; // $foo es integer (15)
$foo = 5 + "10 Cerdos pequeños";     // $foo es integer (15)
// Los siguientes forzados de tipos están permitidos
// (int), (integer) - forzado a integer
// (bool), (boolean) - forzado a boolean
// (float), (double), (real) - forzado a float
// (string) - forzado a string
// (array) - forzado a array
// (object) - forzado a object
// (unset) - forzado a NULL (PHP 5)

?>