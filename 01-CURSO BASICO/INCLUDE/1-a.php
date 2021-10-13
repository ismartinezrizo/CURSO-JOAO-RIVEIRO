<?php
// IMPORTAR SCRIPT CON INCLUDE
// La grande mayoria de los proyectos de programacion siempre van a necesitar de tener su codigo "partido" entre diferente ficheros. Salvo raras excepciones, un proyecto tendra decenas o centenas de ficheros para que la aplicacion funcione.

// Es aqui que entran los mecanismos de importacion de script dentro de otros scripts

// La importacion puede ser hecha recorriendo al uso de la instruccion include

// NOTA: el include, a semejanza del echo, son instrucciones especiales de php y no requieren la utilizacion de parentesis.

include 'config.php';

// Esta instruccion va insertar el codigo de programacion del script config.php dentro de script actual.