<?php
$a = str_repeat('-', 20); //--------------------
$b = str_repeat('=', 20); //====================

$valor = 100;
echo "valor: " . str_pad($valor, 20, '.', STR_PAD_LEFT) . "\n\n\n";

$valores = [100, 200, 0, 500];
foreach ($valores as $valor) {
  // echo str_pad($valor, 20, '.', STR_PAD_LEFT) . "\n";
  echo str_pad($valor, 20, '.', STR_PAD_LEFT) . PHP_EOL;
}
