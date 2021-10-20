<?php
// sprintf — Devuelve un string formateado

// El string de formateo está compuesto de cero o más directivas: caracteres ordinarios (excluyendo %) que son copiados directamente al resultado, y especificaciones de conversión, donde cada una de las cuales da lugar a extraer su propio parámetro. Esto se aplica tanto para sprintf() como para printf().

// Cada especificación de conversión consiste en un signo de porcentaje (%), seguido por uno o más de estos elementos, en orden:

// % - un carácter de porcentaje literal. No se requiere argumento.
// b - el argumento es tratado como un valor de tipo integer y presentado como un número binario.
// c - el argumento es tratado como un valor de tipo integer y presentado como el carácter con ese valor ASCII.
// d - el argumento es tratado como un valor de tipo integer y presentado como un número decimal (con signo).
// e - el argumento es tratado con notación científica (e.g. 1.2e+2). El especificador de precisión indica el número de dígitos después del punto decimal a partir de PHP 5.2.1. En versiones anteriores, se tomó como el número de dígitos significativos (menos uno).
// E - como %e pero utiliza la letra mayúscula (e.g. 1.2E+2).
// f - el argumento es tratado como un valor de tipo float y presentado como un número de punto flotante (considerando la configuración regional).
// F - el argumento es tratado como un valor de tipo float y presentado como un número de punto flotante (no considerando la configuración regional). Disponible desde PHP 4.3.10 y PHP 5.0.3.
// g - lo mismo que %e y %f.
// G - lo mismo que %E y %f.
// o - el argumento es tratado como un valor de tipo integer y presentado como un número octal.
// s - el argumento es tratado y presentado como un string.
// u - el argumento es tratado como un valor de tipo integer y presentado como un número decimal sin signo.
// x - el argumento es tratado como un valor de tipo integer y presentado como un número hexadecimal (con las letras en minúsculas).
// X - el argumento es tratado como un valor de tipo integer y presentado como un número hexadecimal (con las letras en mayúsculas).
// Las variables serán forzadas por el especificador a un tipo adecuado:

// string	s
// integer	d, u, c, o, x, X, b
// double	g, G, e, E, f, F


$localizacion = "de la sala";
$total_personas = 123;

// %s transforma un parametro a un string
echo sprintf("Existen %s personas dentro %s", $total_personas, $localizacion) . "\n";

// %d transforma un parametro a un string
echo sprintf("Existen %d personas dentro %s", $total_personas, $localizacion) . "\n";

// si el orden de los argumentos fueran modificados, podemos usar %1, %2, etc. para identificar cual argumento, seguido de $ o el tipo de output pretendido. tiene que ser con comillas simples (' ')
echo sprintf('Dentro %2$s fueron encontradas %1$d personas', $total_personas, $localizacion) . "\n";

// Ejemplo Especificar un carácter de relleno
echo sprintf("%'.9d\n", 123); //......123

// la utilizacion del ' apostrofe define el padding del caracter inmediatamente. despues el caracter escogido definimos el numero de repeticion de ese caracter despues de especificador que determina como va ser tratado el valor del argumento.

// 10 caracteres rellena con puntos los que hagan falta
echo sprintf("Capacidad: %'.10d", 124) . "\n";
// 8 caracteres rellena con puntos los que hagan falta
echo sprintf("Total: %'.8d", 1000);
