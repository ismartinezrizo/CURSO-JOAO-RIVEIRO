<?php
// Introducción ¶
// El principal objetivo de la SAPI CLI es el desarrollo de aplicaciones de consola con PHP.

// Se puede consultar en cualquier momento la lista de opciones de línea de comandos en el binario de PHP con el modificador -h:

//  -r <code> Run PHP <code> without using script tags php

// php contiene una cli sapi
  // cli - command line interface
  // sapi - server application progamming interface

  // Permite ejecutar intrucciones de una forma muy simple
  // la cli permite no solo ejecutar procesos, tambien presenta output
  // en la terminal(en este caso no formatado en html, como es obvio)

  // ejemplo: para ejecutar un comando usamos php -r seguido del comando
  // php -r "phpinfo();"
// php -r "echo 'Mensaje de prueba';"
// si queremos ejecutar un script
// php [nombre_del_script].php
// o es posible ejecutar un script sin extencion .php
