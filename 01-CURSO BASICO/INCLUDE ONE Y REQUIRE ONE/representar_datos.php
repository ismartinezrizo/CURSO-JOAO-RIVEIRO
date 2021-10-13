<?php
// ES POSIBLE EJECUTAR UNA EXPRESION DE RETORNO DENTRO DE UNA SCRIPT IMPORTADO
// EN EL ARCHIVO datos.PHP RETORNA UN ARRAY CON LOS PAISES
$paises = require_once 'datos.php';
echo "Paises: ";
// echo "<pre>";
print_r($paises);


// foreach ($paises as $pais) {
//   echo $pais . "\n";
// }
