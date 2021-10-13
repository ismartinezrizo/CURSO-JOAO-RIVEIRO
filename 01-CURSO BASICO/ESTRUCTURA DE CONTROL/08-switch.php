<?php
//* La sentencia switch es similar a una serie de sentencias IF en la misma expresión. En muchas ocasiones, es posible que se quiera comparar la misma variable (o expresión) con muchos valores diferentes, y ejecutar una parte de código distinta dependiendo de a que valor es igual. Para esto es exactamente la expresión switch.

//* Nota: Cabe señalar que a diferencia de algunos otros lenguajes, la sentencia continue se aplica a switch y actúa de manera similar a break. Si se tiene un switch dentro de un bucle y se desea continuar a la siguiente iteración de del ciclo exterior, se utiliza continue 2.


//^ con if Ejemplo #1 Estructura switch
// $i = 0;

// if ($i == 0) {
//   echo "i es igual a 0";
// } elseif ($i == 1) {
//   echo "i es igual a 1";
// } elseif ($i == 2) {
//   echo "i es igual a 2";
// }



//^ con switch Ejemplo #2 Estrutura switch permite el uso de strings
$i = 10;
switch ($i) {
  case 0:
    echo "i es igual a 0";
    break;
  case 1:
    echo "i es igual a 1";
    break;
  case 2:
    echo "i es igual a 2";
    break;
  case 3:
    echo "i es igual a 3";
    break;
  case 4:
    echo "i es igual a 4";
    break;
  case 5:
    echo "i es igual a 5";
    break;
  default:
    echo "el valor de i: $i";
    break;
}

//^ en caso de que i valga 0,1,2 muestra el valor de i
// switch ($i) {
//   case 0:
//   case 1:
//   case 2:
//     echo "i es menor que 3 pero no negativo";
//     break;
//   case 3:
//     echo "i es 3";
// }


echo "\n";
$fruta = "manzana";

switch ($fruta) {
  case "manzana":
    echo "fruta es una manzana";
    break;
  case "barra":
    echo "fruta es una barra";
    break;
  case "pastel":
    echo "fruta es un pastel";
    break;
  default:
    echo "fruta es $fruta";
    break;
}

switch ($fruta):
  case "manzana":
    echo "fruta es una manzana";
    break;
  case "barra":
    echo "fruta es una barra";
    break;
  case "pastel":
    echo "fruta es un pastel";
    break;
  default:
    echo "fruta es $fruta";
    break;
endswitch;

switch ($beer) {
  case 'tuborg';
  case 'carlsberg';
  case 'heineken';
    echo 'Buena elección';
    break;
  default;
    echo 'Por favor haga una nueva selección...';
    break;
}
