<?php
# VARIABLES
// $primer_nombre = "Isaac";
// $segundo_nombre = "Abraham";
// $nombre_completo = "Nombre completo: " . $primer_nombre . " " . $segundo_nombre;
// echo $nombre_completo;
// var_dump($variable_indefinida ? "True" : "False");

# VARIABLES PREDEFINIDA

// Superglobals — Superglobals son variables internas que están disponibles siempre en todos los ámbitos
// $GLOBALS — Hace referencia a todas las variables disponibles en el ámbito global
// $_SERVER — Información del entorno del servidor y de ejecución
// $_GET — Variables HTTP GET
// $_POST — Variables POST de HTTP
// $_FILES — Variables de subida de ficheros HTTP
// $_REQUEST — Variables HTTP Request
// $_SESSION — Variables de sesión
// $_ENV — Variables de entorno
// $_COOKIE — Cookies HTTP
// $php_errormsg — El mensaje de error anterior
// $http_response_header — Encabezados de respuesta HTTP
// $argc — El número de argumentos pasados a un script
// $argv — Array de argumentos pasados a un script

# AMBITO DE LAS VARIABLES

// $a = 1; //AMBITO GLOBAL
// function test()
// {
//   global $a;
//   echo $a; /* referencia a una variable del ámbito local */
// }

// test();

// $b = 5;
// $c = 5;
// function suma()
// {
//   global $b, $c, $resultado;
//   $resultado = $b + $c;
// }

// suma();
// echo $resultado;

// Un segundo método para acceder a las variables desde un ámbito global es usando el array $GLOBALS. El ejemplo anterior se puede reescribir así:

// $b = 5;
// $c = 5;
// function suma()
// {
//   $GLOBALS['resultado'] = $GLOBALS['b'] + $GLOBALS['c'];
// }

// suma();
// echo $resultado;
// El array $GLOBALS es un array asociativo con el nombre de la variable global como clave y los contenidos de dicha variable como el valor del elemento del array. $GLOBALS existe en cualquier ámbito, esto ocurre ya que $GLOBALS es una superglobal

# VARIABLES VARIABLES

$a = 'hola';

// Una variable variable toma el valor de una variable y lo trata como el nombre de una variable. En el ejemplo anterior, hola, se puede usar como el nombre de una variable utilizando dos signos de dólar. Es decir:
$$a = 'mundo';
// En este momento se han definido y almacenado dos variables en el árbol de símbolos de PHP: $a, que contiene "hola", y $hola, que contiene "mundo". Es más, esta sentencia:

echo $a . "\n";
echo $$a . "\n";

echo "$a ${$a} \n";
// produce el mismo resultado que:
echo "$a $hola \n";

// Formularios HTML (GET y POST)
// Cuando se envía un formulario a un script de PHP, la información de dicho formulario pasa a estar automáticamente disponible en el script. Existen algunas formas de acceder a esta información, por ejemplo:

# VARIABLES DESDE FUENTES EXTERNAS

// Ejemplo #1 Un formulario HTML sencillo

// <form action="foo.php" method="post">
//     Nombre usuario: <input type="text" name="username" /><br />
//     Email:  <input type="text" name="email" /><br />
//     <input type="submit" name="submit" value="¡Enviarme!" />
// </form>
// A partir de PHP 5.4.0, solamente existen dos maneras de acceder a datos desde formularios HTML. Los métodos disponibles actualmente se enumeran a continuación:

// Ejemplo #2 Acceso a datos de un formulario HTML sencillo con POST

// echo $_POST['username'];
// echo $_REQUEST['username'];
