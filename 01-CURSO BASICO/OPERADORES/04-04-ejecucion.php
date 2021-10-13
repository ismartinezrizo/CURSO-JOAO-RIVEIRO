<?php
/*
* Operadores de ejecución
todo - PHP soporta un operador de ejecución: las comillas invertidas (``). ¡Note que estas no son las comillas sencillas! PHP intentará ejecutar el contenido entre las comillas invertidas como si se tratara de un comando del shell; la salida será retornada (es decir, no será simplemente volcada como salida; puede ser asignada a una variable). El uso del operador de comillas invertidas es idéntico al de shell_exec().
*/

$ls = `ls`;
echo $ls;

$pwd = `pwd`;
echo $pwd;

// ? creamos una carpeta
$nombre_carpeta = ("Esta es una carpeta con espacios");
$nombre_carpeta = str_replace(" ", "_", $nombre_carpeta);
$carpeta = `mkdir $nombre_carpeta`;
