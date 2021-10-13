<?php

// CUANDO EL SCRIPT SE ENCUENTRA EN LA MISMA CARPETA
include 'config.php';

// PARA HACER USO DE LA CONSTANTE NOMBRE_APLICACION DEBO INCLUIR EL ARCHIVO CONFIG.PHP
echo NOMBRE_APLICACION . "\n";

// CUANDO EL SCRIPT SE ENCUENTRA EN OTRA CARPETA
include 'inc/datos.php';

echo $nombre . "\n";

include 'inc/datos2.php';

echo $fecha->format('d-m-Y');
