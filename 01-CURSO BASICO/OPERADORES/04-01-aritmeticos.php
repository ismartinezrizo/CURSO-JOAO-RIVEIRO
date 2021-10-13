<?php

# Operadores aritméticos
// ----------------------------------------------------------------------------------------------
// +$a	Identidad	Conversión de $a a int o float según el caso.
// -$a	Negación	Opuesto de $a.
// $a + $b	Adición	Suma de $a y $b.
// $a - $b	Sustracción	Diferencia de $a y $b.
// $a * $b	Multiplicación	Producto de $a y $b.
// $a / $b	División	Cociente de $a y $b.
// $a % $b	Módulo	Resto de $a dividido por $b.
// $a ** $b	Exponenciación	Resultado de elevar $a a la potencia $bésima. Introducido en PHP 5.6.

$a = 10;
$b = 5;

echo "Negacion: \n";
echo -$a;
echo "\n";

echo "Suma: \n";
echo $a + $b;
echo "\n";

echo "Resta: \n";
echo $a - $b;
echo "\n";

echo "Multiplicación: \n";
echo $a * $b;
echo "\n";

echo "División: \n";
echo $a / $b;
echo "\n";

echo "Módulo: \n";
echo $a % $b;
echo "\n";

echo "Exponenciación: \n";
echo $a ** $b;
echo "\n";
