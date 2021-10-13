<?php
$a = "isaac martinez";
$b = "ANA CAROLINA";
$c = "Francisco Santos";

// strtoupper - transforma un string para mayuscula
echo strtoupper($a) . "\n"; //ISAAC MARTINEZ
echo strtoupper($c) . "\n"; //FRANCISCO SANTOS

$a = "Isaac Abraham Martínez";
echo strtoupper($a) . "\n";
// para cuando una letra esta acentuada, es necesaria tener activo el modulo mbstring, en php.init debemos descomentar la extension mbstring
echo mb_strtoupper($a) . "\n";

// strtolower - transforma a minuscula
echo strtolower($a) . "\n"; //isaac abraham martínez
echo strtolower($c) . "\n"; //francisco santos     

// de igual modo, existe la funcion mb_strtolower()

echo ucfirst('isaac martinez') . "\n"; //Isaac Martinez
echo ucfirst('índice') . "\n";

// lcfirst - transforma la primera letra en minuscula
echo lcfirst('ISAAC MARTINEZ') . "\n";

// ucwords - transforma todas las primeras letras en mayuscula
echo ucwords("isaac martinez rizo") . "\n";
