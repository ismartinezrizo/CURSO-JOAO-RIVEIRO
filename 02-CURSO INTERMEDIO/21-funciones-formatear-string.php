<?php

// PRINTF | SPRINTF | VPRINTF | VSPRINTF | VFPRINTF | SSCANF | FSCANF
// ------------------------------------------------------------------

/*
Existen varias funciones con terminologia muy semejante cuya principal finadidad es el output, la grabacion en stream o retorno de string formatados de acuerdo con varias reglas o diretivas

Estas funciones son particularmente complejas, porque contienen un abanico de opciones muy variado de posibilidades de formatacion. Vamos a ver el caso de printf.
*/

/*
 printf - Muestra un string formateado (con un numero variable de argumentos)
 sprintf - Retorna el string formateado
 vprintf - Muestra un string formateado(pero con un array de argumentos)
 sscanf - Interpreta la entrada de un string de acuerdo con formato.
 fscanf - Interpreta la lectura de un archivo de acuerdo con formato
 */


//  podemos usar la funcion printf para simplemente mostrar un texto
printf("Hola mundo");
echo "\n";

// Substituye el %S por el argumento en sequencia
printf("Mi nombre es %s y el apellido es %s", "Isaac", "Martinez");
echo "\n";


$valor = 65;
// presentar el codigo binario de la variable $valor
printf("%b", $valor);
echo "\n";

// presentar el caracter cuyo codigo ASCII es indentificado en valor
printf("%c", $valor);
echo "\n";

// el valor sera presentado como entero
// si el valor es un string alfanumerico, va dar cero. Si fuera un string con valor numerico, presenta un numero
printf("%d", $valor);
